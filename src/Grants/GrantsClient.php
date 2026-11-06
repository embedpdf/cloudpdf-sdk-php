<?php

namespace CloudPDF\Grants;

use CloudPDF\Grants\Visitors\VisitorsClient;
use Psr\Http\Client\ClientInterface;
use CloudPDF\Core\Client\RawClient;
use CloudPDF\Grants\Requests\GrantsExchangeRequest;
use CloudPDF\Types\GrantsExchangeResponse;
use CloudPDF\Exceptions\CloudPDFException;
use CloudPDF\Exceptions\CloudPDFApiException;
use CloudPDF\Core\Json\JsonApiRequest;
use CloudPDF\Environments;
use CloudPDF\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use CloudPDF\Grants\Requests\ListGrantsRequest;
use CloudPDF\Types\GrantsListResponse;
use CloudPDF\Grants\Requests\GrantsCreateRequest;
use CloudPDF\Types\GrantsCreateResponse;
use CloudPDF\Types\GrantsGetResponse;
use CloudPDF\Grants\Requests\GrantsUpdateRequest;
use CloudPDF\Types\GrantsUpdateResponse;
use CloudPDF\Types\GrantsArchiveResponse;

class GrantsClient
{
    /**
     * @var VisitorsClient $visitors
     */
    public VisitorsClient $visitors;

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
        $this->visitors = new VisitorsClient($this->client, $this->options);
    }

    /**
     * Unauthenticated, but requires a browser Origin header, checked against the grant allowlist. Unknown, deleted, paused and archived grants are indistinguishable (404). Passphrase-protected grants return 422 GrantPassphraseRequired until `passphrase` is supplied. A grant that asks its visitors who they are on open returns 422 VisitorIdentityRequired until the required answers are given; `error.details` carries `fields` (what the grant asks), `missing`, `invalid`, `purpose` and `privacyUrl`. A grant that asks before the first change issues the session at once with `visitor.identityRequest`, and writes answer 403 VisitorIdentityRequired with the same details until the visitor exchanges again with their answers. Answers that can not be taken answer 422 on any grant. Mounted only when the deployment can sign (HS256 mode).
     *
     * Example:
     * ```php
     * $client->grants->exchange(
     *     new GrantsExchangeRequest([
     *         'grant' => 'grant',
     *     ]),
     * );
     * ```
     *
     * @param GrantsExchangeRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GrantsExchangeResponse
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function exchange(GrantsExchangeRequest $request, ?array $options = null): ?GrantsExchangeResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Saas->value,
                    path: "v1/grant-sessions",
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
                return GrantsExchangeResponse::fromJson($json);
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
     * $client->grants->list(
     *     'tenantId',
     *     new ListGrantsRequest([]),
     * );
     * ```
     *
     * @param string $tenantId
     * @param ListGrantsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GrantsListResponse
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function list(string $tenantId, ListGrantsRequest $request = new ListGrantsRequest(), ?array $options = null): ?GrantsListResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        if ($request->limit != null) {
            $query['limit'] = $request->limit;
        }
        if ($request->cursor != null) {
            $query['cursor'] = $request->cursor;
        }
        if ($request->docId != null) {
            $query['docId'] = $request->docId;
        }
        if ($request->archived != null) {
            $query['archived'] = $request->archived;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Saas->value,
                    path: "v1/tenants/{$tenantId}/grants",
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
                return GrantsListResponse::fromJson($json);
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
     * The returned id is what a link page or an embed opens. Its scope gives only document permissions the caller holds itself, as tokens.issue does. Mounted only when the deployment can sign (HS256 mode) — exchange mints session JWTs, so grants exist only where minting does.
     *
     * Example:
     * ```php
     * $client->grants->create(
     *     'tenantId',
     *     new GrantsCreateRequest([
     *         'docId' => 'docId',
     *         'scope' => [
     *             'scope',
     *         ],
     *     ]),
     * );
     * ```
     *
     * @param string $tenantId
     * @param GrantsCreateRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GrantsCreateResponse
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function create(string $tenantId, GrantsCreateRequest $request, ?array $options = null): ?GrantsCreateResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Saas->value,
                    path: "v1/tenants/{$tenantId}/grants",
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
                return GrantsCreateResponse::fromJson($json);
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
     * $client->grants->get(
     *     'tenantId',
     *     'grantId',
     * );
     * ```
     *
     * @param string $tenantId
     * @param string $grantId
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GrantsGetResponse
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function get(string $tenantId, string $grantId, ?array $options = null): ?GrantsGetResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Saas->value,
                    path: "v1/tenants/{$tenantId}/grants/{$grantId}",
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
                return GrantsGetResponse::fromJson($json);
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
     * $client->grants->delete(
     *     'tenantId',
     *     'grantId',
     * );
     * ```
     *
     * @param string $tenantId
     * @param string $grantId
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
    public function delete(string $tenantId, string $grantId, ?array $options = null): void
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Saas->value,
                    path: "v1/tenants/{$tenantId}/grants/{$grantId}",
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
     * Example:
     * ```php
     * $client->grants->update(
     *     'tenantId',
     *     'grantId',
     *     new GrantsUpdateRequest([]),
     * );
     * ```
     *
     * @param string $tenantId
     * @param string $grantId
     * @param GrantsUpdateRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GrantsUpdateResponse
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function update(string $tenantId, string $grantId, GrantsUpdateRequest $request = new GrantsUpdateRequest(), ?array $options = null): ?GrantsUpdateResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Saas->value,
                    path: "v1/tenants/{$tenantId}/grants/{$grantId}",
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
                return GrantsUpdateResponse::fromJson($json);
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
     * Archiving is final: an archived grant never exchanges again, and to give access again you create a new grant. Pausing (`disabled`) is the reversible stop. An archived grant no longer counts as using its shared layer, so that layer can be deleted.
     *
     * Example:
     * ```php
     * $client->grants->archive(
     *     'tenantId',
     *     'grantId',
     * );
     * ```
     *
     * @param string $tenantId
     * @param string $grantId
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GrantsArchiveResponse
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function archive(string $tenantId, string $grantId, ?array $options = null): ?GrantsArchiveResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Saas->value,
                    path: "v1/tenants/{$tenantId}/grants/{$grantId}/archive",
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
                return GrantsArchiveResponse::fromJson($json);
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
