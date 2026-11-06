<?php

namespace CloudPDF\Documents;

use CloudPDF\Documents\Layers\LayersClient;
use Psr\Http\Client\ClientInterface;
use CloudPDF\Core\Client\RawClient;
use CloudPDF\Documents\Requests\ListDocumentsRequest;
use CloudPDF\Types\DocumentsListResponse;
use CloudPDF\Exceptions\CloudPDFException;
use CloudPDF\Exceptions\CloudPDFApiException;
use CloudPDF\Core\Json\JsonApiRequest;
use CloudPDF\Environments;
use CloudPDF\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use CloudPDF\Types\DocumentsGetResponse;
use CloudPDF\Documents\Requests\DocumentsUpdateRequest;
use CloudPDF\Types\DocumentsUpdateResponse;
use CloudPDF\Documents\Requests\DocumentsCommitRequest;
use CloudPDF\Types\DocumentsCommitResponse;
use CloudPDF\Documents\Requests\UploadProxyDocumentsRequest;
use CloudPDF\Types\DocumentsUploadProxyResponse;
use CloudPDF\Core\Multipart\MultipartFormData;
use CloudPDF\Core\Multipart\MultipartApiRequest;
use CloudPDF\Documents\Requests\DocumentsImportFromRequest;
use CloudPDF\Types\DocumentsImportFrom200Response;
use CloudPDF\Documents\Requests\DocumentsInitRequest;
use CloudPDF\Types\DocumentsInitResponse;

class DocumentsClient
{
    /**
     * @var LayersClient $layers
     */
    public LayersClient $layers;

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
        $this->layers = new LayersClient($this->client, $this->options);
    }

    /**
     * Example:
     * ```php
     * $client->documents->list(
     *     'tenantId',
     *     new ListDocumentsRequest([]),
     * );
     * ```
     *
     * @param string $tenantId
     * @param ListDocumentsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DocumentsListResponse
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function list(string $tenantId, ListDocumentsRequest $request = new ListDocumentsRequest(), ?array $options = null): ?DocumentsListResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        if ($request->limit != null) {
            $query['limit'] = $request->limit;
        }
        if ($request->cursor != null) {
            $query['cursor'] = $request->cursor;
        }
        if ($request->state != null) {
            $query['state'] = $request->state;
        }
        if ($request->q != null) {
            $query['q'] = $request->q;
        }
        if ($request->folderId != null) {
            $query['folderId'] = $request->folderId;
        }
        if ($request->sort != null) {
            $query['sort'] = $request->sort;
        }
        if ($request->order != null) {
            $query['order'] = $request->order;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Saas->value,
                    path: "v1/tenants/{$tenantId}/documents",
                    method: HttpMethod::GET,
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
                return DocumentsListResponse::fromJson($json);
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
     * $client->documents->get(
     *     'tenantId',
     *     'docId',
     * );
     * ```
     *
     * @param string $tenantId
     * @param string $docId
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DocumentsGetResponse
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function get(string $tenantId, string $docId, ?array $options = null): ?DocumentsGetResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Saas->value,
                    path: "v1/tenants/{$tenantId}/documents/{$docId}",
                    method: HttpMethod::GET,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return DocumentsGetResponse::fromJson($json);
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
     * $client->documents->delete(
     *     'tenantId',
     *     'docId',
     * );
     * ```
     *
     * @param string $tenantId
     * @param string $docId
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function delete(string $tenantId, string $docId, ?array $options = null): void
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Saas->value,
                    path: "v1/tenants/{$tenantId}/documents/{$docId}",
                    method: HttpMethod::DELETE,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                return;
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
     * A document that is being deleted answers 404.
     *
     * Example:
     * ```php
     * $client->documents->update(
     *     'tenantId',
     *     'docId',
     *     new DocumentsUpdateRequest([
     *         'name' => 'name',
     *     ]),
     * );
     * ```
     *
     * @param string $tenantId
     * @param string $docId
     * @param DocumentsUpdateRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DocumentsUpdateResponse
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function update(string $tenantId, string $docId, DocumentsUpdateRequest $request, ?array $options = null): ?DocumentsUpdateResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Saas->value,
                    path: "v1/tenants/{$tenantId}/documents/{$docId}",
                    method: HttpMethod::PATCH,
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
                return DocumentsUpdateResponse::fromJson($json);
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
     * An upload token commits only the documents it started; any other document answers 404.
     *
     * Example:
     * ```php
     * $client->documents->commit(
     *     'tenantId',
     *     'docId',
     *     new DocumentsCommitRequest([
     *         'sha256' => 'sha256',
     *     ]),
     * );
     * ```
     *
     * @param string $tenantId
     * @param string $docId
     * @param DocumentsCommitRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DocumentsCommitResponse
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function commit(string $tenantId, string $docId, DocumentsCommitRequest $request, ?array $options = null): ?DocumentsCommitResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Saas->value,
                    path: "v1/tenants/{$tenantId}/documents/{$docId}/commit",
                    method: HttpMethod::POST,
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
                return DocumentsCommitResponse::fromJson($json);
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
     * $client->documents->download(
     *     'tenantId',
     *     'docId',
     * );
     * ```
     *
     * @param string $tenantId
     * @param string $docId
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
    public function download(string $tenantId, string $docId, ?array $options = null): string
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Saas->value,
                    path: "v1/tenants/{$tenantId}/documents/{$docId}/download",
                    method: HttpMethod::GET,
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
     * $client->documents->thumbnail(
     *     'tenantId',
     *     'docId',
     * );
     * ```
     *
     * @param string $tenantId
     * @param string $docId
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
    public function thumbnail(string $tenantId, string $docId, ?array $options = null): string
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Saas->value,
                    path: "v1/tenants/{$tenantId}/documents/{$docId}/thumbnail",
                    method: HttpMethod::GET,
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
     * This bounded origin-mediated fallback must only be used after documents.init returns upload.kind=proxy. Auto mode prefers a presigned object-store PUT whenever available. An upload token sends files only to the documents it started.
     *
     * Example:
     * ```php
     * $client->documents->uploadProxy(
     *     'tenantId',
     *     'docId',
     *     new UploadProxyDocumentsRequest([
     *         'file' => File::createFromString("example_file", "example_file"),
     *     ]),
     * );
     * ```
     *
     * @param string $tenantId
     * @param string $docId
     * @param UploadProxyDocumentsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     * } $options
     * @return ?DocumentsUploadProxyResponse
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function uploadProxy(string $tenantId, string $docId, UploadProxyDocumentsRequest $request, ?array $options = null): ?DocumentsUploadProxyResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $body = new MultipartFormData();
        $body->addPart($request->file->toMultipartFormDataPart('file'));
        try {
            $response = $this->client->sendRequest(
                new MultipartApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Saas->value,
                    path: "v1/tenants/{$tenantId}/documents/{$docId}/upload-proxy",
                    method: HttpMethod::POST,
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
                return DocumentsUploadProxyResponse::fromJson($json);
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
     * Default mode is synchronous and bounded: the response returns only after the transfer verified and committed (or failed). mode=async (connection sources only) answers 202 immediately and an in-process worker performs the transfer with leased, fenced retries; poll the document until ready/failed. The deployment import policy gates scheme, network range, and size; sources must declare a length. CloudPDF copies and owns the bytes — the source is never referenced in place. A 502 marks a retryable upstream failure: retry with the same idempotencyKey to resume the same document. URL sources are capabilities and never echoed back. Connection sources name operator-registered storage (bucket/prefix scope, allowed credential classes, and tenant bindings are deployment configuration); `revision` is provider-interpreted (S3 VersionId, GCS generation, Azure version id).
     *
     * Example:
     * ```php
     * $client->documents->importFrom(
     *     'tenantId',
     *     new DocumentsImportFromRequest([
     *         'source' => DocumentsImportFromRequestSource::url(new DocumentsImportFromRequestSourceUrl([
     *             'url' => 'url',
     *         ])),
     *     ]),
     * );
     * ```
     *
     * @param string $tenantId
     * @param DocumentsImportFromRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DocumentsImportFrom200Response
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function importFrom(string $tenantId, DocumentsImportFromRequest $request, ?array $options = null): ?DocumentsImportFrom200Response
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Saas->value,
                    path: "v1/tenants/{$tenantId}/documents/import",
                    method: HttpMethod::POST,
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
                return DocumentsImportFrom200Response::fromJson($json);
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
     * With an upload token, the document goes into the token's folder with the token's metadata, whatever the request says; sizeBytes must be within the token's maxBytes, and the token makes at most maxFiles documents (403 after). docId, idempotencyKey and dedupMode reuse-existing are refused (400): each could reach a document the token didn't make.
     *
     * Example:
     * ```php
     * $client->documents->init(
     *     'tenantId',
     *     new DocumentsInitRequest([
     *         'sizeBytes' => 1,
     *         'contentSha256' => 'contentSha256',
     *     ]),
     * );
     * ```
     *
     * @param string $tenantId
     * @param DocumentsInitRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DocumentsInitResponse
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function init(string $tenantId, DocumentsInitRequest $request, ?array $options = null): ?DocumentsInitResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Saas->value,
                    path: "v1/tenants/{$tenantId}/documents/init",
                    method: HttpMethod::POST,
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
                return DocumentsInitResponse::fromJson($json);
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
