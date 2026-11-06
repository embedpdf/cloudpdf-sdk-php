<?php

namespace CloudPDF\Tokens;

use Psr\Http\Client\ClientInterface;
use CloudPDF\Core\Client\RawClient;
use CloudPDF\Tokens\Requests\IssueTokensRequest;
use CloudPDF\Types\TokensIssueResponse;
use CloudPDF\Exceptions\CloudPDFException;
use CloudPDF\Exceptions\CloudPDFApiException;
use CloudPDF\Core\Json\JsonApiRequest;
use CloudPDF\Environments;
use CloudPDF\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use CloudPDF\Tokens\Requests\TokensRevokeRequest;

class TokensClient
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
     * Authority mints only downward: kind "doc" gives only document permissions the caller holds itself, kind "tenant" requires the API token, and kind "upload" requires docs.create instead of tokens.issue-doc, since an upload token can do only what docs.create allows. Mounted only when the deployment can sign (HS256 mode); asymmetric deployments mint with their own private key.
     *
     * Example:
     * ```php
     * $client->tokens->issue(
     *     'tenantId',
     *     new IssueTokensRequest([
     *         'body' => TokensIssueRequest::doc(new TokensIssueRequestDoc([
     *             'sub' => 'sub',
     *             'docId' => 'docId',
     *             'scope' => [
     *                 'scope',
     *             ],
     *             'expiresInSeconds' => 1,
     *         ])),
     *     ]),
     * );
     * ```
     *
     * @param string $tenantId
     * @param IssueTokensRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?TokensIssueResponse
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function issue(string $tenantId, IssueTokensRequest $request, ?array $options = null): ?TokensIssueResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Saas->value,
                    path: "v1/tenants/{$tenantId}/tokens",
                    method: HttpMethod::POST,
                    body: $request->body,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return TokensIssueResponse::fromJson($json);
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
     * Mounted only when the deployment enables token revocation.
     *
     * Example:
     * ```php
     * $client->tokens->revoke(
     *     'tenantId',
     *     'jti',
     *     new TokensRevokeRequest([]),
     * );
     * ```
     *
     * @param string $tenantId
     * @param string $jti
     * @param TokensRevokeRequest $request
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
    public function revoke(string $tenantId, string $jti, TokensRevokeRequest $request = new TokensRevokeRequest(), ?array $options = null): void
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Saas->value,
                    path: "v1/tenants/{$tenantId}/tokens/{$jti}/revoke",
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
