<?php

namespace Cloudpdf\Doc\Redactions;

use Psr\Http\Client\ClientInterface;
use Cloudpdf\Core\Client\RawClient;
use Cloudpdf\Doc\Redactions\Requests\ApplyRedactionsRequest;
use Cloudpdf\Types\DocRedactionsApply200Response;
use Cloudpdf\Exceptions\CloudpdfException;
use Cloudpdf\Exceptions\CloudpdfApiException;
use Cloudpdf\Core\Json\JsonApiRequest;
use Cloudpdf\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;

class RedactionsClient
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
     * $client->doc->redactions->apply(
     *     'docId',
     *     'layerName',
     *     new ApplyRedactionsRequest([
     *         'body' => [
     *             'key' => "value",
     *         ],
     *     ]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $layerName
     * @param ApplyRedactionsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DocRedactionsApply200Response
     * @throws CloudpdfException
     * @throws CloudpdfApiException
     */
    public function apply(string $docId, string $layerName, ApplyRedactionsRequest $request, ?array $options = null): ?DocRedactionsApply200Response
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
                    path: "v1/docs/{$docId}/layers/{$layerName}/redactions/apply",
                    method: HttpMethod::POST,
                    headers: $headers,
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
                return DocRedactionsApply200Response::fromJson($json);
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
