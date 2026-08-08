<?php

namespace Cloudpdf\Tokens;

use Psr\Http\Client\ClientInterface;
use Cloudpdf\Core\Client\RawClient;
use Cloudpdf\Tokens\Requests\IssueTokensRequest;
use Cloudpdf\Types\TokensIssue200Response;
use Cloudpdf\Exceptions\CloudpdfException;
use Cloudpdf\Exceptions\CloudpdfApiException;
use Cloudpdf\Core\Json\JsonApiRequest;
use Cloudpdf\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use Cloudpdf\Tokens\Requests\TokensRevokeRequest;

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
     * kind "tenant" requires the API token — authority mints only downward. Mounted only when the deployment can sign (HS256 mode); asymmetric deployments mint with their own private key.
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
     *             'expiresIn' => 1,
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
     * @return ?TokensIssue200Response
     * @throws CloudpdfException
     * @throws CloudpdfApiException
     */
    public function issue(string $tenantId, IssueTokensRequest $request, ?array $options = null): ?TokensIssue200Response
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? '',
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
                return TokensIssue200Response::fromJson($json);
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
     * @throws CloudpdfException
     * @throws CloudpdfApiException
     */
    public function revoke(string $tenantId, string $jti, TokensRevokeRequest $request = new TokensRevokeRequest(), ?array $options = null): void
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? '',
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
            throw new CloudpdfException(message: $e->getMessage(), previous: $e);
        }
        throw new CloudpdfApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }
}
