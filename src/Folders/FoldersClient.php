<?php

namespace CloudPDF\Folders;

use Psr\Http\Client\ClientInterface;
use CloudPDF\Core\Client\RawClient;
use CloudPDF\Folders\Requests\ListFoldersRequest;
use CloudPDF\Types\FoldersList200Response;
use CloudPDF\Exceptions\CloudPDFException;
use CloudPDF\Exceptions\CloudPDFApiException;
use CloudPDF\Core\Json\JsonApiRequest;
use CloudPDF\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use CloudPDF\Folders\Requests\FoldersCreateRequest;
use CloudPDF\Types\FoldersCreate200Response;
use CloudPDF\Types\FoldersGet200Response;
use CloudPDF\Folders\Requests\DeleteFoldersRequest;
use CloudPDF\Folders\Requests\FoldersUpdateRequest;
use CloudPDF\Types\FoldersUpdate200Response;
use CloudPDF\Folders\Requests\FoldersMoveIntoRequest;

class FoldersClient
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
     * $client->folders->list(
     *     'tenantId',
     *     new ListFoldersRequest([]),
     * );
     * ```
     *
     * @param string $tenantId
     * @param ListFoldersRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?FoldersList200Response
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function list(string $tenantId, ListFoldersRequest $request = new ListFoldersRequest(), ?array $options = null): ?FoldersList200Response
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        if ($request->limit != null) {
            $query['limit'] = $request->limit;
        }
        if ($request->cursor != null) {
            $query['cursor'] = $request->cursor;
        }
        if ($request->parentId != null) {
            $query['parentId'] = $request->parentId;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? '',
                    path: "v1/tenants/{$tenantId}/folders",
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
                return FoldersList200Response::fromJson($json);
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
     * 409 Conflict carries `details.reason`: `name-taken` (a sibling has the name, ignoring case; `details.name`) or `too-deep` (folders nest at most 100 levels; `details.maxDepth`). 404 when the parent folder does not exist.
     *
     * Example:
     * ```php
     * $client->folders->create(
     *     'tenantId',
     *     new FoldersCreateRequest([
     *         'name' => 'name',
     *     ]),
     * );
     * ```
     *
     * @param string $tenantId
     * @param FoldersCreateRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?FoldersCreate200Response
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function create(string $tenantId, FoldersCreateRequest $request, ?array $options = null): ?FoldersCreate200Response
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? '',
                    path: "v1/tenants/{$tenantId}/folders",
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
                return FoldersCreate200Response::fromJson($json);
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
     * $client->folders->get(
     *     'tenantId',
     *     'folderId',
     * );
     * ```
     *
     * @param string $tenantId
     * @param string $folderId
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?FoldersGet200Response
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function get(string $tenantId, string $folderId, ?array $options = null): ?FoldersGet200Response
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? '',
                    path: "v1/tenants/{$tenantId}/folders/{$folderId}",
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
                return FoldersGet200Response::fromJson($json);
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
     * Without recursive, a folder with anything inside is refused: 409 Conflict with `details.reason` `not-empty` and what it holds, counted over every level below, in `details.folders` and `details.documents`. With recursive=true, the folder and every folder under it go at once, and every document in them stops opening, leaves every list and stops answering its share links at once; their stored files and links are removed in the background. Uploads into those folders that have not committed cannot commit.
     *
     * Example:
     * ```php
     * $client->folders->delete(
     *     'tenantId',
     *     'folderId',
     *     new DeleteFoldersRequest([]),
     * );
     * ```
     *
     * @param string $tenantId
     * @param string $folderId
     * @param DeleteFoldersRequest $request
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
    public function delete(string $tenantId, string $folderId, DeleteFoldersRequest $request = new DeleteFoldersRequest(), ?array $options = null): void
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        if ($request->recursive != null) {
            $query['recursive'] = $request->recursive;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? '',
                    path: "v1/tenants/{$tenantId}/folders/{$folderId}",
                    method: HttpMethod::DELETE,
                    query: $query,
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
     * 409 Conflict with `details.reason` `name-taken` when a sibling has the name, ignoring case.
     *
     * Example:
     * ```php
     * $client->folders->update(
     *     'tenantId',
     *     'folderId',
     *     new FoldersUpdateRequest([
     *         'name' => 'name',
     *     ]),
     * );
     * ```
     *
     * @param string $tenantId
     * @param string $folderId
     * @param FoldersUpdateRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?FoldersUpdate200Response
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function update(string $tenantId, string $folderId, FoldersUpdateRequest $request, ?array $options = null): ?FoldersUpdate200Response
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? '',
                    path: "v1/tenants/{$tenantId}/folders/{$folderId}",
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
                return FoldersUpdate200Response::fromJson($json);
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
     * Up to 1,000 ids in total. A folder moves with everything in it. 404 NotFound names the ids that do not exist or are being deleted in `details.documentIds` and `details.folderIds`. 409 Conflict carries `details.reason`: `cycle` (the destination is a moved folder or inside one; `details.folderId`), `too-deep` (the move would nest folders deeper than 100 levels; `details.maxDepth`) or `name-taken` (a moved folder's name is taken in the destination, ignoring case; `details.name`).
     *
     * Example:
     * ```php
     * $client->folders->moveInto(
     *     'tenantId',
     *     'folderId',
     *     new FoldersMoveIntoRequest([]),
     * );
     * ```
     *
     * @param string $tenantId
     * @param string $folderId A folder id, or root for the top level.
     * @param FoldersMoveIntoRequest $request
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
    public function moveInto(string $tenantId, string $folderId, FoldersMoveIntoRequest $request = new FoldersMoveIntoRequest(), ?array $options = null): void
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? '',
                    path: "v1/tenants/{$tenantId}/folders/{$folderId}/move-into",
                    method: HttpMethod::POST,
                    body: $request,
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
}
