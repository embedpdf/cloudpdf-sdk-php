<?php

namespace CloudPDF\Doc;

use CloudPDF\Doc\Annotations\AnnotationsClient;
use CloudPDF\Doc\Attachments\AttachmentsClient;
use CloudPDF\Doc\Forms\FormsClient;
use CloudPDF\Doc\Metadata\MetadataClient;
use CloudPDF\Doc\Outline\OutlineClient;
use CloudPDF\Doc\Pages\PagesClient;
use CloudPDF\Doc\Redactions\RedactionsClient;
use CloudPDF\Doc\Signatures\SignaturesClient;
use CloudPDF\Doc\Versions\VersionsClient;
use Psr\Http\Client\ClientInterface;
use CloudPDF\Core\Client\RawClient;
use CloudPDF\Doc\Requests\HeadDocRequest;
use CloudPDF\Types\DocHead200Response;
use CloudPDF\Exceptions\CloudPDFException;
use CloudPDF\Exceptions\CloudPDFApiException;
use CloudPDF\Core\Json\JsonApiRequest;
use CloudPDF\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use CloudPDF\Doc\Requests\DocChangesRequest;
use CloudPDF\Types\DocChanges200Response;
use CloudPDF\Doc\Requests\DownloadDocRequest;
use CloudPDF\Doc\Requests\DocDownloadLinkRequest;
use CloudPDF\Types\DocDownloadLink200Response;
use CloudPDF\Doc\Requests\ManifestDocRequest;
use CloudPDF\Types\DocManifest200Response;
use CloudPDF\Doc\Requests\RenderDocRequest;
use CloudPDF\Doc\Requests\TextDocRequest;
use CloudPDF\Types\DocText200Response;

class DocClient
{
    /**
     * @var AnnotationsClient $annotations
     */
    public AnnotationsClient $annotations;

    /**
     * @var AttachmentsClient $attachments
     */
    public AttachmentsClient $attachments;

    /**
     * @var FormsClient $forms
     */
    public FormsClient $forms;

    /**
     * @var MetadataClient $metadata
     */
    public MetadataClient $metadata;

    /**
     * @var OutlineClient $outline
     */
    public OutlineClient $outline;

    /**
     * @var PagesClient $pages
     */
    public PagesClient $pages;

    /**
     * @var RedactionsClient $redactions
     */
    public RedactionsClient $redactions;

    /**
     * @var SignaturesClient $signatures
     */
    public SignaturesClient $signatures;

    /**
     * @var VersionsClient $versions
     */
    public VersionsClient $versions;

    /**
     * @var array{
     *   baseUrl?: string,
     *   client?: ClientInterface,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     * } $options @phpstan-ignore-next-line Property is used in endpoint methods via HttpEndpointGenerator
     */
    private array $options;

    /**
     * @var RawClient $client
     */
    private RawClient $client;

    /**
     * @param RawClient $client
     * @param ?array{
     *   baseUrl?: string,
     *   client?: ClientInterface,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     * } $options
     */
    public function __construct(
        RawClient $client,
        ?array $options = null,
    ) {
        $this->client = $client;
        $this->options = $options ?? [];
        $this->annotations = new AnnotationsClient($this->client, $this->options);
        $this->attachments = new AttachmentsClient($this->client, $this->options);
        $this->forms = new FormsClient($this->client, $this->options);
        $this->metadata = new MetadataClient($this->client, $this->options);
        $this->outline = new OutlineClient($this->client, $this->options);
        $this->pages = new PagesClient($this->client, $this->options);
        $this->redactions = new RedactionsClient($this->client, $this->options);
        $this->signatures = new SignaturesClient($this->client, $this->options);
        $this->versions = new VersionsClient($this->client, $this->options);
    }

    /**
     * Example:
     * ```php
     * $client->doc->head(
     *     'docId',
     *     new HeadDocRequest([]),
     * );
     * ```
     *
     * @param string $docId
     * @param HeadDocRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DocHead200Response
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function head(string $docId, HeadDocRequest $request = new HeadDocRequest(), ?array $options = null): ?DocHead200Response
    {
        $options = array_merge($this->options, $options ?? []);
        $headers = [];
        if ($request->documentPassword != null) {
            $headers['X-Document-Password'] = $request->documentPassword;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? '',
                    path: "v1/docs/{$docId}/head",
                    method: HttpMethod::GET,
                    headers: $headers,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return DocHead200Response::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new CloudPDFException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new CloudPDFException(message: $e->getMessage(), previous: $e);
        }
        throw new CloudPDFApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Each change stands on its own and names itself by `opId`: a refused change rolls back alone, and the answer lists every change in order, applied with its result or refused with its error. Asked again under its `opId`, a change gets the same answer, refusals included; a different change under an answered `opId` is refused (IdempotencyKeyReused). `{ opId, undoOf }` undoes an earlier change of the caller, here or in an earlier request; an undo leaves alone what was changed since, and the undo of an undo redoes. A redaction, a flatten, a form repair or a completed signature ends undo for the changes before it (UndoUnavailable). Each op is checked against its own capability: annotation ops need `doc.annotate.modify`, form values `doc.forms.fill`, form structure `doc.forms.modify`, metadata `doc.metadata.modify`, outline `doc.outline.modify`, pages `doc.pages.assemble`, embedded files `doc.attachments.modify`. Bytes (a stamp's drawing, an attached file, a signature's artwork, a PDF whose pages come in) travel as multipart: a JSON `body` part, each op naming its files by role as `resources: { <role>: '<key>' }`, and each file as the part `resource:<key>`. At most 64 changes per request and 512 ops per change.
     *
     * Example:
     * ```php
     * $client->doc->changes(
     *     'docId',
     *     'layerName',
     *     new DocChangesRequest([
     *         'changes' => [
     *             new DocChangesRequestChangesItem([
     *                 'opId' => 'opId',
     *             ]),
     *         ],
     *     ]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $layerName
     * @param DocChangesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DocChanges200Response
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function changes(string $docId, string $layerName, DocChangesRequest $request, ?array $options = null): ?DocChanges200Response
    {
        $options = array_merge($this->options, $options ?? []);
        $headers = [];
        if ($request->documentPassword != null) {
            $headers['X-Document-Password'] = $request->documentPassword;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? '',
                    path: "v1/docs/{$docId}/layers/{$layerName}/changes",
                    method: HttpMethod::POST,
                    headers: $headers,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return DocChanges200Response::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new CloudPDFException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new CloudPDFException(message: $e->getMessage(), previous: $e);
        }
        throw new CloudPDFApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Example:
     * ```php
     * $client->doc->download(
     *     'docId',
     *     'layerName',
     *     new DownloadDocRequest([]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $layerName
     * @param DownloadDocRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return string
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function download(string $docId, string $layerName, DownloadDocRequest $request = new DownloadDocRequest(), ?array $options = null): string
    {
        $options = array_merge($this->options, $options ?? []);
        $headers = [];
        if ($request->documentPassword != null) {
            $headers['X-Document-Password'] = $request->documentPassword;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? '',
                    path: "v1/docs/{$docId}/layers/{$layerName}/download",
                    method: HttpMethod::GET,
                    headers: $headers,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                return $response->getBody()->getContents();
            }
        } catch (ClientExceptionInterface $e) {
            throw new CloudPDFException(message: $e->getMessage(), previous: $e);
        }
        throw new CloudPDFApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * The link opens the layer as it is when created: once the layer changes, it answers 404, so create it right before handing it over. It downloads that one file and nothing else, and a password-protected document is checked when the link is created. Deployments that verify tokens with their own keys (JWKS) mint links on their backend: a doc token with `layer_name`, a `download: { docVersion, mode: "incremental" }` claim and a short `exp`, passed as `link` on the versioned download URL.
     *
     * Example:
     * ```php
     * $client->doc->downloadLink(
     *     'docId',
     *     'layerName',
     *     new DocDownloadLinkRequest([]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $layerName
     * @param DocDownloadLinkRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DocDownloadLink200Response
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function downloadLink(string $docId, string $layerName, DocDownloadLinkRequest $request = new DocDownloadLinkRequest(), ?array $options = null): ?DocDownloadLink200Response
    {
        $options = array_merge($this->options, $options ?? []);
        $headers = [];
        if ($request->documentPassword != null) {
            $headers['X-Document-Password'] = $request->documentPassword;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? '',
                    path: "v1/docs/{$docId}/layers/{$layerName}/download-link",
                    method: HttpMethod::POST,
                    headers: $headers,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return DocDownloadLink200Response::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new CloudPDFException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new CloudPDFException(message: $e->getMessage(), previous: $e);
        }
        throw new CloudPDFApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Example:
     * ```php
     * $client->doc->manifest(
     *     'docId',
     *     'layerName',
     *     new ManifestDocRequest([]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $layerName
     * @param ManifestDocRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DocManifest200Response
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function manifest(string $docId, string $layerName, ManifestDocRequest $request = new ManifestDocRequest(), ?array $options = null): ?DocManifest200Response
    {
        $options = array_merge($this->options, $options ?? []);
        $headers = [];
        if ($request->documentPassword != null) {
            $headers['X-Document-Password'] = $request->documentPassword;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? '',
                    path: "v1/docs/{$docId}/layers/{$layerName}/manifest",
                    method: HttpMethod::GET,
                    headers: $headers,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return DocManifest200Response::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new CloudPDFException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new CloudPDFException(message: $e->getMessage(), previous: $e);
        }
        throw new CloudPDFApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Render parameters (viewport, format) pass as flat dotted query keys, e.g. `?viewport.kind=width&viewport.width=800`; the full grammar is documented with the viewer.
     *
     * Example:
     * ```php
     * $client->doc->render(
     *     'docId',
     *     'layerName',
     *     'pageKey',
     *     new RenderDocRequest([]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $layerName
     * @param string $pageKey The page's address, `obj:N`: the page's indirect object number, the durable identity every `PageLayout.ref` carries. Mirrors `annotKey` and `fieldKey`.
     * @param RenderDocRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return string
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function render(string $docId, string $layerName, string $pageKey, RenderDocRequest $request = new RenderDocRequest(), ?array $options = null): string
    {
        $options = array_merge($this->options, $options ?? []);
        $headers = [];
        if ($request->documentPassword != null) {
            $headers['X-Document-Password'] = $request->documentPassword;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? '',
                    path: "v1/docs/{$docId}/layers/{$layerName}/render/pages/{$pageKey}/data",
                    method: HttpMethod::GET,
                    headers: $headers,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                return $response->getBody()->getContents();
            }
        } catch (ClientExceptionInterface $e) {
            throw new CloudPDFException(message: $e->getMessage(), previous: $e);
        }
        throw new CloudPDFApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Example:
     * ```php
     * $client->doc->text(
     *     'docId',
     *     'layerName',
     *     'pageKey',
     *     new TextDocRequest([]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $layerName
     * @param string $pageKey The page's address, `obj:N`: the page's indirect object number, the durable identity every `PageLayout.ref` carries. Mirrors `annotKey` and `fieldKey`.
     * @param TextDocRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DocText200Response
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function text(string $docId, string $layerName, string $pageKey, TextDocRequest $request = new TextDocRequest(), ?array $options = null): ?DocText200Response
    {
        $options = array_merge($this->options, $options ?? []);
        $headers = [];
        if ($request->documentPassword != null) {
            $headers['X-Document-Password'] = $request->documentPassword;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? '',
                    path: "v1/docs/{$docId}/layers/{$layerName}/text/pages/{$pageKey}/data",
                    method: HttpMethod::GET,
                    headers: $headers,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return DocText200Response::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new CloudPDFException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new CloudPDFException(message: $e->getMessage(), previous: $e);
        }
        throw new CloudPDFApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }
}
