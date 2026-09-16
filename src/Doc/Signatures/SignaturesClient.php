<?php

namespace CloudPDF\Doc\Signatures;

use Psr\Http\Client\ClientInterface;
use CloudPDF\Core\Client\RawClient;
use CloudPDF\Doc\Signatures\Requests\ListSignaturesRequest;
use CloudPDF\Types\DocSignaturesList200Response;
use CloudPDF\Exceptions\CloudPDFException;
use CloudPDF\Exceptions\CloudPDFApiException;
use CloudPDF\Core\Json\JsonApiRequest;
use CloudPDF\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use CloudPDF\Doc\Signatures\Requests\AbortSignaturesRequest;
use CloudPDF\Types\DocSignaturesAbort200Response;
use CloudPDF\Doc\Signatures\Requests\DocSignaturesCompleteRequest;
use CloudPDF\Types\DocSignaturesComplete200Response;
use CloudPDF\Doc\Signatures\Requests\AnalysisSignaturesRequest;
use CloudPDF\Types\DocSignaturesAnalysis200Response;
use CloudPDF\Doc\Signatures\Requests\PrepareSignaturesRequest;
use CloudPDF\Types\DocSignaturesPrepare200Response;
use CloudPDF\Core\Multipart\MultipartFormData;
use CloudPDF\Core\Multipart\MultipartApiRequest;

class SignaturesClient
{
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
    }

    /**
     * Describes the bytes the layer is over: the base version's signatures plus the layer's own edits as the last revision. Signed bytes (contents, digests, revision prefixes) are served per base version under /versions.
     *
     * Example:
     * ```php
     * $client->doc->signatures->list(
     *     'docId',
     *     'layerName',
     *     new ListSignaturesRequest([]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $layerName
     * @param ListSignaturesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DocSignaturesList200Response
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function list(string $docId, string $layerName, ListSignaturesRequest $request = new ListSignaturesRequest(), ?array $options = null): ?DocSignaturesList200Response
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
                    path: "v1/docs/{$docId}/layers/{$layerName}/signatures",
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
                return DocSignaturesList200Response::fromJson($json);
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
     * $client->doc->signatures->abort(
     *     'docId',
     *     'layerName',
     *     'signingId',
     *     new AbortSignaturesRequest([]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $layerName
     * @param string $signingId
     * @param AbortSignaturesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DocSignaturesAbort200Response
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function abort(string $docId, string $layerName, string $signingId, AbortSignaturesRequest $request = new AbortSignaturesRequest(), ?array $options = null): ?DocSignaturesAbort200Response
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
                    path: "v1/docs/{$docId}/layers/{$layerName}/signatures/{$signingId}",
                    method: HttpMethod::DELETE,
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
                return DocSignaturesAbort200Response::fromJson($json);
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
     * `cms` is the detached CMS over the prepared digest, base64. `expectedVersion` must be what prepare returned. Idempotent by signing id: the same CMS again answers `already-completed`. Every layer of the document then sits over the new version; refetch the manifest after a completion.
     *
     * Example:
     * ```php
     * $client->doc->signatures->complete(
     *     'docId',
     *     'layerName',
     *     'signingId',
     *     new DocSignaturesCompleteRequest([
     *         'cms' => 'cms',
     *         'expectedVersion' => new DocSignaturesCompleteRequestExpectedVersion([
     *             'baseSha256' => 'baseSha256',
     *             'editsVersion' => 1,
     *         ]),
     *     ]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $layerName
     * @param string $signingId
     * @param DocSignaturesCompleteRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DocSignaturesComplete200Response
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function complete(string $docId, string $layerName, string $signingId, DocSignaturesCompleteRequest $request, ?array $options = null): ?DocSignaturesComplete200Response
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
                    path: "v1/docs/{$docId}/layers/{$layerName}/signatures/{$signingId}/complete",
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
                return DocSignaturesComplete200Response::fromJson($json);
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
     * Exactly one of `since.signature=<index>` or `since.revision=<index>`; the layer's pending edits are the end. `level=fill|annotate|lta|none` evaluates exploratorily and never becomes a verdict. For history between two base revisions use the version analysis.
     *
     * Example:
     * ```php
     * $client->doc->signatures->analysis(
     *     'docId',
     *     'layerName',
     *     new AnalysisSignaturesRequest([]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $layerName
     * @param AnalysisSignaturesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DocSignaturesAnalysis200Response
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function analysis(string $docId, string $layerName, AnalysisSignaturesRequest $request = new AnalysisSignaturesRequest(), ?array $options = null): ?DocSignaturesAnalysis200Response
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        if ($request->sinceSignature != null) {
            $query['since.signature'] = $request->sinceSignature;
        }
        if ($request->sinceRevision != null) {
            $query['since.revision'] = $request->sinceRevision;
        }
        if ($request->level != null) {
            $query['level'] = $request->level;
        }
        $headers = [];
        if ($request->documentPassword != null) {
            $headers['X-Document-Password'] = $request->documentPassword;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? '',
                    path: "v1/docs/{$docId}/layers/{$layerName}/signatures/analysis",
                    method: HttpMethod::GET,
                    headers: $headers,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return DocSignaturesAnalysis200Response::fromJson($json);
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
     * The multipart envelope: a JSON `body` part (field, subFilter, digest, contentsSize, signer, certify, lock, appearance) and an optional `resource:<key>` PDF part the body's `appearance.resource` names. A certification (`certify.permission`) additionally requires `doc.sign.certify`. The layer is read-only until the signing completes, is aborted, or expires (15 minutes). A layer behind the document head cannot sign (StaleBase).
     *
     * Example:
     * ```php
     * $client->doc->signatures->prepare(
     *     'docId',
     *     'layerName',
     *     new PrepareSignaturesRequest([
     *         'file' => File::createFromString("example_file", "example_file"),
     *     ]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $layerName
     * @param PrepareSignaturesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     * } $options
     * @return ?DocSignaturesPrepare200Response
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function prepare(string $docId, string $layerName, PrepareSignaturesRequest $request, ?array $options = null): ?DocSignaturesPrepare200Response
    {
        $options = array_merge($this->options, $options ?? []);
        $headers = [];
        if ($request->documentPassword != null) {
            $headers['X-Document-Password'] = $request->documentPassword;
        }
        $body = new MultipartFormData();
        $body->addPart($request->file->toMultipartFormDataPart('file'));
        try {
            $response = $this->client->sendRequest(
                new MultipartApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? '',
                    path: "v1/docs/{$docId}/layers/{$layerName}/signatures/prepare",
                    method: HttpMethod::POST,
                    headers: $headers,
                    body: $body,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return DocSignaturesPrepare200Response::fromJson($json);
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
