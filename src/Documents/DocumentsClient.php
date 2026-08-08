<?php

namespace Cloudpdf\Documents;

use Psr\Http\Client\ClientInterface;
use Cloudpdf\Core\Client\RawClient;
use Cloudpdf\Documents\Requests\ListDocumentsRequest;
use Cloudpdf\Types\DocumentsList200Response;
use Cloudpdf\Exceptions\CloudpdfException;
use Cloudpdf\Exceptions\CloudpdfApiException;
use Cloudpdf\Core\Json\JsonApiRequest;
use Cloudpdf\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use Cloudpdf\Types\DocumentsGet200Response;
use Cloudpdf\Documents\Requests\DocumentsCommitRequest;
use Cloudpdf\Types\DocumentsCommit200Response;
use Cloudpdf\Types\DocumentsUploadDirect200Response;
use Cloudpdf\Documents\Requests\DocumentsInitRequest;
use Cloudpdf\Types\DocumentsInit200Response;

class DocumentsClient
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
     * @return ?DocumentsList200Response
     * @throws CloudpdfException
     * @throws CloudpdfApiException
     */
    public function list(string $tenantId, ListDocumentsRequest $request = new ListDocumentsRequest(), ?array $options = null): ?DocumentsList200Response
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
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? '',
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
                return DocumentsList200Response::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new CloudpdfException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new CloudpdfException(message: $e->getMessage(), previous: $e);
        }
        throw new CloudpdfApiException(
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
     *     'id',
     * );
     * ```
     *
     * @param string $tenantId
     * @param string $id
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DocumentsGet200Response
     * @throws CloudpdfException
     * @throws CloudpdfApiException
     */
    public function get(string $tenantId, string $id, ?array $options = null): ?DocumentsGet200Response
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? '',
                    path: "v1/tenants/{$tenantId}/documents/{$id}",
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
                return DocumentsGet200Response::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new CloudpdfException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new CloudpdfException(message: $e->getMessage(), previous: $e);
        }
        throw new CloudpdfApiException(
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
     *     'id',
     * );
     * ```
     *
     * @param string $tenantId
     * @param string $id
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @throws CloudpdfException
     * @throws CloudpdfApiException
     */
    public function delete(string $tenantId, string $id, ?array $options = null): void
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? '',
                    path: "v1/tenants/{$tenantId}/documents/{$id}",
                    method: HttpMethod::DELETE,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                return;
            }
        } catch (ClientExceptionInterface $e) {
            throw new CloudpdfException(message: $e->getMessage(), previous: $e);
        }
        throw new CloudpdfApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Example:
     * ```php
     * $client->documents->commit(
     *     'tenantId',
     *     'id',
     *     new DocumentsCommitRequest([
     *         'sha256' => 'sha256',
     *     ]),
     * );
     * ```
     *
     * @param string $tenantId
     * @param string $id
     * @param DocumentsCommitRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DocumentsCommit200Response
     * @throws CloudpdfException
     * @throws CloudpdfApiException
     */
    public function commit(string $tenantId, string $id, DocumentsCommitRequest $request, ?array $options = null): ?DocumentsCommit200Response
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? '',
                    path: "v1/tenants/{$tenantId}/documents/{$id}/commit",
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
                return DocumentsCommit200Response::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new CloudpdfException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new CloudpdfException(message: $e->getMessage(), previous: $e);
        }
        throw new CloudpdfApiException(
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
     *     'id',
     * );
     * ```
     *
     * @param string $tenantId
     * @param string $id
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return string
     * @throws CloudpdfException
     * @throws CloudpdfApiException
     */
    public function download(string $tenantId, string $id, ?array $options = null): string
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? '',
                    path: "v1/tenants/{$tenantId}/documents/{$id}/download",
                    method: HttpMethod::GET,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                return $response->getBody()->getContents();
            }
        } catch (ClientExceptionInterface $e) {
            throw new CloudpdfException(message: $e->getMessage(), previous: $e);
        }
        throw new CloudpdfApiException(
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
     *     'id',
     * );
     * ```
     *
     * @param string $tenantId
     * @param string $id
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return string
     * @throws CloudpdfException
     * @throws CloudpdfApiException
     */
    public function thumbnail(string $tenantId, string $id, ?array $options = null): string
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? '',
                    path: "v1/tenants/{$tenantId}/documents/{$id}/thumbnail",
                    method: HttpMethod::GET,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                return $response->getBody()->getContents();
            }
        } catch (ClientExceptionInterface $e) {
            throw new CloudpdfException(message: $e->getMessage(), previous: $e);
        }
        throw new CloudpdfApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * @param string $tenantId
     * @param string $id
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DocumentsUploadDirect200Response
     * @throws CloudpdfException
     * @throws CloudpdfApiException
     */
    public function uploadDirect(string $tenantId, string $id, ?array $options = null): ?DocumentsUploadDirect200Response
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? '',
                    path: "v1/tenants/{$tenantId}/documents/{$id}/upload-direct",
                    method: HttpMethod::POST,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return DocumentsUploadDirect200Response::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new CloudpdfException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new CloudpdfException(message: $e->getMessage(), previous: $e);
        }
        throw new CloudpdfApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Example:
     * ```php
     * $client->documents->init(
     *     'tenantId',
     *     new DocumentsInitRequest([
     *         'contentLength' => 1.1,
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
     * @return ?DocumentsInit200Response
     * @throws CloudpdfException
     * @throws CloudpdfApiException
     */
    public function init(string $tenantId, DocumentsInitRequest $request, ?array $options = null): ?DocumentsInit200Response
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? '',
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
                return DocumentsInit200Response::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new CloudpdfException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new CloudpdfException(message: $e->getMessage(), previous: $e);
        }
        throw new CloudpdfApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }
}
