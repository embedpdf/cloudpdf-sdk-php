<?php

namespace CloudPDF\Doc;

use CloudPDF\Doc\Annotations\AnnotationsClient;
use CloudPDF\Doc\Forms\FormsClient;
use CloudPDF\Doc\Metadata\MetadataClient;
use CloudPDF\Doc\Pages\PagesClient;
use CloudPDF\Doc\Redactions\RedactionsClient;
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
use CloudPDF\Doc\Requests\DownloadDocRequest;
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
     * @var FormsClient $forms
     */
    public FormsClient $forms;

    /**
     * @var MetadataClient $metadata
     */
    public MetadataClient $metadata;

    /**
     * @var PagesClient $pages
     */
    public PagesClient $pages;

    /**
     * @var RedactionsClient $redactions
     */
    public RedactionsClient $redactions;

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
        $this->forms = new FormsClient($this->client, $this->options);
        $this->metadata = new MetadataClient($this->client, $this->options);
        $this->pages = new PagesClient($this->client, $this->options);
        $this->redactions = new RedactionsClient($this->client, $this->options);
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
     *     1,
     *     new RenderDocRequest([]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $layerName
     * @param int $pon
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
    public function render(string $docId, string $layerName, int $pon, RenderDocRequest $request = new RenderDocRequest(), ?array $options = null): string
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
                    path: "v1/docs/{$docId}/layers/{$layerName}/render/pages/{$pon}/data",
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
     *     1,
     *     new TextDocRequest([]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $layerName
     * @param int $pon
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
    public function text(string $docId, string $layerName, int $pon, TextDocRequest $request = new TextDocRequest(), ?array $options = null): ?DocText200Response
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
                    path: "v1/docs/{$docId}/layers/{$layerName}/text/pages/{$pon}/data",
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
