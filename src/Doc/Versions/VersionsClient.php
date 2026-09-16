<?php

namespace CloudPDF\Doc\Versions;

use Psr\Http\Client\ClientInterface;
use CloudPDF\Core\Client\RawClient;
use CloudPDF\Doc\Versions\Requests\ListVersionsRequest;
use CloudPDF\Types\DocVersionsList200Response;
use CloudPDF\Exceptions\CloudPDFException;
use CloudPDF\Exceptions\CloudPDFApiException;
use CloudPDF\Core\Json\JsonApiRequest;
use CloudPDF\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use CloudPDF\Doc\Versions\Requests\AnalysisVersionsRequest;
use CloudPDF\Types\DocVersionsAnalysis200Response;
use CloudPDF\Doc\Versions\Requests\DownloadVersionsRequest;
use CloudPDF\Doc\Versions\Requests\RevisionVersionsRequest;
use CloudPDF\Doc\Versions\Requests\SignaturesVersionsRequest;
use CloudPDF\Types\DocVersionsSignatures200Response;
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
     * Every completed signature publishes a new version. Never cached: the list grows.
     *
     * Example:
     * ```php
     * $client->doc->versions->list(
     *     'docId',
     *     new ListVersionsRequest([]),
     * );
     * ```
     *
     * @param string $docId
     * @param ListVersionsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DocVersionsList200Response
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function list(string $docId, ListVersionsRequest $request = new ListVersionsRequest(), ?array $options = null): ?DocVersionsList200Response
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
                    path: "v1/docs/{$docId}/versions",
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
                return DocVersionsList200Response::fromJson($json);
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
     * Exactly one of `since.signature` / `since.revision`; `until=<revision>` defaults to the last. The same answer for every layer and every caller.
     *
     * Example:
     * ```php
     * $client->doc->versions->analysis(
     *     'docId',
     *     'sha',
     *     new AnalysisVersionsRequest([]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $sha
     * @param AnalysisVersionsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DocVersionsAnalysis200Response
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function analysis(string $docId, string $sha, AnalysisVersionsRequest $request = new AnalysisVersionsRequest(), ?array $options = null): ?DocVersionsAnalysis200Response
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
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? '',
                    path: "v1/docs/{$docId}/versions/analysis/{$sha}",
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
                return DocVersionsAnalysis200Response::fromJson($json);
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
     *     'sha',
     *     new DownloadVersionsRequest([]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $sha
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
    public function download(string $docId, string $sha, DownloadVersionsRequest $request = new DownloadVersionsRequest(), ?array $options = null): string
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
                    path: "v1/docs/{$docId}/versions/download/{$sha}",
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
     *     'sha',
     *     1,
     *     new RevisionVersionsRequest([]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $sha
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
    public function revision(string $docId, string $sha, int $index, RevisionVersionsRequest $request = new RevisionVersionsRequest(), ?array $options = null): string
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
                    path: "v1/docs/{$docId}/versions/revisions/{$sha}/{$index}",
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
     *     'sha',
     *     new SignaturesVersionsRequest([]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $sha
     * @param SignaturesVersionsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DocVersionsSignatures200Response
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function signatures(string $docId, string $sha, SignaturesVersionsRequest $request = new SignaturesVersionsRequest(), ?array $options = null): ?DocVersionsSignatures200Response
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
                    path: "v1/docs/{$docId}/versions/signatures/{$sha}",
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
                return DocVersionsSignatures200Response::fromJson($json);
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
     *     'sha',
     *     'fieldKey',
     *     new SignatureContentsVersionsRequest([]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $sha
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
    public function signatureContents(string $docId, string $sha, string $fieldKey, SignatureContentsVersionsRequest $request = new SignatureContentsVersionsRequest(), ?array $options = null): string
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
                    path: "v1/docs/{$docId}/versions/signatures/{$sha}/{$fieldKey}/contents",
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
     *     'sha',
     *     'fieldKey',
     *     SignatureDigestVersionsRequestAlgorithm::Sha1->value,
     *     new SignatureDigestVersionsRequest([]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $sha
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
    public function signatureDigest(string $docId, string $sha, string $fieldKey, string $algorithm, SignatureDigestVersionsRequest $request = new SignatureDigestVersionsRequest(), ?array $options = null): string
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
                    path: "v1/docs/{$docId}/versions/signatures/{$sha}/{$fieldKey}/digest/{$algorithm}",
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
