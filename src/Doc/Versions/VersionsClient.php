<?php

namespace CloudPDF\Doc\Versions;

use Psr\Http\Client\ClientInterface;
use CloudPDF\Core\Client\RawClient;
use CloudPDF\Doc\Versions\Requests\ListVersionsRequest;
use CloudPDF\Types\DocVersionsListResponse;
use CloudPDF\Exceptions\CloudPDFException;
use CloudPDF\Exceptions\CloudPDFApiException;
use CloudPDF\Core\Json\JsonApiRequest;
use CloudPDF\Environments;
use CloudPDF\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use CloudPDF\Doc\Versions\Requests\AnalysisVersionsRequest;
use CloudPDF\Types\DocVersionsAnalysisResponse;
use CloudPDF\Doc\Versions\Requests\DownloadVersionsRequest;
use CloudPDF\Doc\Versions\Requests\RevisionVersionsRequest;
use CloudPDF\Doc\Versions\Requests\SignaturesVersionsRequest;
use CloudPDF\Types\DocVersionsSignaturesResponse;
use CloudPDF\Doc\Versions\Requests\SignatureContentsVersionsRequest;
use CloudPDF\Doc\Versions\Types\SignatureDigestVersionsRequestAlgorithm;
use CloudPDF\Doc\Versions\Requests\SignatureDigestVersionsRequest;

class VersionsClient
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
     * Every completed signature makes a new version of its layer; another layer's versions are never listed. Never cached: the list grows.
     *
     * Example:
     * ```php
     * $client->doc->versions->list(
     *     'docId',
     *     'layerName',
     *     new ListVersionsRequest([]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $layerName
     * @param ListVersionsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DocVersionsListResponse
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function list(string $docId, string $layerName, ListVersionsRequest $request = new ListVersionsRequest(), ?array $options = null): ?DocVersionsListResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $headers = [];
        if ($request->documentPassword != null) {
            $headers['X-Document-Password'] = $request->documentPassword;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Saas->value,
                    path: "v1/docs/{$docId}/layers/{$layerName}/versions",
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
                return DocVersionsListResponse::fromJson($json);
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
     * Exactly one of `since.signature` / `since.revision`; `until=<revision>` defaults to the last. The same answer for every caller.
     *
     * Example:
     * ```php
     * $client->doc->versions->analysis(
     *     'docId',
     *     'layerName',
     *     'sha256',
     *     new AnalysisVersionsRequest([]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $layerName
     * @param string $sha256
     * @param AnalysisVersionsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DocVersionsAnalysisResponse
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function analysis(string $docId, string $layerName, string $sha256, AnalysisVersionsRequest $request = new AnalysisVersionsRequest(), ?array $options = null): ?DocVersionsAnalysisResponse
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
        if ($request->until != null) {
            $query['until'] = $request->until;
        }
        if ($request->policy != null) {
            $query['policy'] = $request->policy;
        }
        $headers = [];
        if ($request->documentPassword != null) {
            $headers['X-Document-Password'] = $request->documentPassword;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Saas->value,
                    path: "v1/docs/{$docId}/layers/{$layerName}/versions/analysis/{$sha256}",
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
                return DocVersionsAnalysisResponse::fromJson($json);
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
     * $client->doc->versions->download(
     *     'docId',
     *     'layerName',
     *     'sha256',
     *     new DownloadVersionsRequest([]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $layerName
     * @param string $sha256
     * @param DownloadVersionsRequest $request
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
    public function download(string $docId, string $layerName, string $sha256, DownloadVersionsRequest $request = new DownloadVersionsRequest(), ?array $options = null): string
    {
        $options = array_merge($this->options, $options ?? []);
        $headers = [];
        if ($request->documentPassword != null) {
            $headers['X-Document-Password'] = $request->documentPassword;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Saas->value,
                    path: "v1/docs/{$docId}/layers/{$layerName}/versions/download/{$sha256}",
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
     * $client->doc->versions->revision(
     *     'docId',
     *     'layerName',
     *     'sha256',
     *     1,
     *     new RevisionVersionsRequest([]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $layerName
     * @param string $sha256
     * @param int $index
     * @param RevisionVersionsRequest $request
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
    public function revision(string $docId, string $layerName, string $sha256, int $index, RevisionVersionsRequest $request = new RevisionVersionsRequest(), ?array $options = null): string
    {
        $options = array_merge($this->options, $options ?? []);
        $headers = [];
        if ($request->documentPassword != null) {
            $headers['X-Document-Password'] = $request->documentPassword;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Saas->value,
                    path: "v1/docs/{$docId}/layers/{$layerName}/versions/revisions/{$sha256}/{$index}",
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
     * $client->doc->versions->signatures(
     *     'docId',
     *     'layerName',
     *     'sha256',
     *     new SignaturesVersionsRequest([]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $layerName
     * @param string $sha256
     * @param SignaturesVersionsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DocVersionsSignaturesResponse
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function signatures(string $docId, string $layerName, string $sha256, SignaturesVersionsRequest $request = new SignaturesVersionsRequest(), ?array $options = null): ?DocVersionsSignaturesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $headers = [];
        if ($request->documentPassword != null) {
            $headers['X-Document-Password'] = $request->documentPassword;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Saas->value,
                    path: "v1/docs/{$docId}/layers/{$layerName}/versions/signatures/{$sha256}",
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
                return DocVersionsSignaturesResponse::fromJson($json);
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
     * `fieldKey` is the field's fully qualified name, token-text encoded (the same encoding attachment keys use).
     *
     * Example:
     * ```php
     * $client->doc->versions->signatureContents(
     *     'docId',
     *     'layerName',
     *     'sha256',
     *     'fieldKey',
     *     new SignatureContentsVersionsRequest([]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $layerName
     * @param string $sha256
     * @param string $fieldKey
     * @param SignatureContentsVersionsRequest $request
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
    public function signatureContents(string $docId, string $layerName, string $sha256, string $fieldKey, SignatureContentsVersionsRequest $request = new SignatureContentsVersionsRequest(), ?array $options = null): string
    {
        $options = array_merge($this->options, $options ?? []);
        $headers = [];
        if ($request->documentPassword != null) {
            $headers['X-Document-Password'] = $request->documentPassword;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Saas->value,
                    path: "v1/docs/{$docId}/layers/{$layerName}/versions/signatures/{$sha256}/{$fieldKey}/contents",
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
     * What a CMS verifier compares its message digest to.
     *
     * Example:
     * ```php
     * $client->doc->versions->signatureDigest(
     *     'docId',
     *     'layerName',
     *     'sha256',
     *     'fieldKey',
     *     SignatureDigestVersionsRequestAlgorithm::Sha1->value,
     *     new SignatureDigestVersionsRequest([]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $layerName
     * @param string $sha256
     * @param string $fieldKey
     * @param value-of<SignatureDigestVersionsRequestAlgorithm> $algorithm
     * @param SignatureDigestVersionsRequest $request
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
    public function signatureDigest(string $docId, string $layerName, string $sha256, string $fieldKey, string $algorithm, SignatureDigestVersionsRequest $request = new SignatureDigestVersionsRequest(), ?array $options = null): string
    {
        $options = array_merge($this->options, $options ?? []);
        $headers = [];
        if ($request->documentPassword != null) {
            $headers['X-Document-Password'] = $request->documentPassword;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Saas->value,
                    path: "v1/docs/{$docId}/layers/{$layerName}/versions/signatures/{$sha256}/{$fieldKey}/digest/{$algorithm}",
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
}
