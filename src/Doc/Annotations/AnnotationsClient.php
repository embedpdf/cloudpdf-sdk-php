<?php

namespace CloudPDF\Doc\Annotations;

use Psr\Http\Client\ClientInterface;
use CloudPDF\Core\Client\RawClient;
use CloudPDF\Doc\Annotations\Requests\ListAllAnnotationsRequest;
use CloudPDF\Types\AnnotationList;
use CloudPDF\Exceptions\CloudPDFException;
use CloudPDF\Exceptions\CloudPDFApiException;
use CloudPDF\Core\Json\JsonApiRequest;
use CloudPDF\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use CloudPDF\Doc\Annotations\Requests\ListAnnotationsRequest;
use CloudPDF\Doc\Annotations\Requests\CreateAnnotationsRequest;
use CloudPDF\Types\DocAnnotationsCreate200Response;
use CloudPDF\Doc\Annotations\Requests\DeleteAnnotationsRequest;
use CloudPDF\Types\DocAnnotationsDelete200Response;
use CloudPDF\Doc\Annotations\Requests\UpdateAnnotationsRequest;
use CloudPDF\Types\DocAnnotationsUpdate200Response;
use CloudPDF\Doc\Annotations\Requests\ReadAppearanceAnnotationsRequest;
use CloudPDF\Doc\Annotations\Requests\ExportAppearanceAnnotationsRequest;
use CloudPDF\Doc\Annotations\Requests\FlattenAnnotationsRequest;
use CloudPDF\Types\DocAnnotationsFlatten200Response;
use CloudPDF\Doc\Annotations\Requests\DocAnnotationsReorderRequest;
use CloudPDF\Types\DocAnnotationsReorder200Response;

class AnnotationsClient
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
     * Returns one entry per page plus the audit-log cursor for reconciling subsequent document events. Page order is unspecified; join by `page` (a `PageRef`) when display order matters.
     *
     * Example:
     * ```php
     * $client->doc->annotations->listAll(
     *     'docId',
     *     'layerName',
     *     new ListAllAnnotationsRequest([]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $layerName
     * @param ListAllAnnotationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?AnnotationList
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function listAll(string $docId, string $layerName, ListAllAnnotationsRequest $request = new ListAllAnnotationsRequest(), ?array $options = null): ?AnnotationList
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
                    path: "v1/docs/{$docId}/layers/{$layerName}/annotations/items",
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
                return AnnotationList::fromJson($json);
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
     * $client->doc->annotations->list(
     *     'docId',
     *     'layerName',
     *     'pageKey',
     *     new ListAnnotationsRequest([]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $layerName
     * @param string $pageKey The page's address, `obj:N`: the page's indirect object number, the durable identity every `PageLayout.ref` carries. Mirrors `annotKey` and `fieldKey`.
     * @param ListAnnotationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?AnnotationList
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function list(string $docId, string $layerName, string $pageKey, ListAnnotationsRequest $request = new ListAnnotationsRequest(), ?array $options = null): ?AnnotationList
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
                    path: "v1/docs/{$docId}/layers/{$layerName}/annotations/pages/{$pageKey}/items",
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
                return AnnotationList::fromJson($json);
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
     * Doc JWTs may instead carry collab scopes (annotations:create:self, …) that refine per-annotation authorship rules; the API token is exempt from both.
     *
     * Example:
     * ```php
     * $client->doc->annotations->create(
     *     'docId',
     *     'layerName',
     *     'pageKey',
     *     new CreateAnnotationsRequest([
     *         'body' => [
     *             'key' => "value",
     *         ],
     *     ]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $layerName
     * @param string $pageKey The page's address, `obj:N`: the page's indirect object number, the durable identity every `PageLayout.ref` carries. Mirrors `annotKey` and `fieldKey`.
     * @param CreateAnnotationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DocAnnotationsCreate200Response
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function create(string $docId, string $layerName, string $pageKey, CreateAnnotationsRequest $request, ?array $options = null): ?DocAnnotationsCreate200Response
    {
        $options = array_merge($this->options, $options ?? []);
        $headers = [];
        if ($request->documentPassword != null) {
            $headers['X-Document-Password'] = $request->documentPassword;
        }
        if ($request->idempotencyKey != null) {
            $headers['Idempotency-Key'] = $request->idempotencyKey;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? '',
                    path: "v1/docs/{$docId}/layers/{$layerName}/annotations/pages/{$pageKey}/items",
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
                return DocAnnotationsCreate200Response::fromJson($json);
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
     * $client->doc->annotations->delete(
     *     'docId',
     *     'layerName',
     *     'pageKey',
     *     'annotKey',
     *     new DeleteAnnotationsRequest([]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $layerName
     * @param string $pageKey The page's address, `obj:N`: the page's indirect object number, the durable identity every `PageLayout.ref` carries. Mirrors `annotKey` and `fieldKey`.
     * @param string $annotKey The annotation's address on the page: `obj:N`, its indirect object number, or `base:N` for an annotation the uploaded file stored inline (without an object number of its own), the position it was born at in the page's /Annots. The name the annotation's `ref` carries for life.
     * @param DeleteAnnotationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DocAnnotationsDelete200Response
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function delete(string $docId, string $layerName, string $pageKey, string $annotKey, DeleteAnnotationsRequest $request = new DeleteAnnotationsRequest(), ?array $options = null): ?DocAnnotationsDelete200Response
    {
        $options = array_merge($this->options, $options ?? []);
        $headers = [];
        if ($request->documentPassword != null) {
            $headers['X-Document-Password'] = $request->documentPassword;
        }
        if ($request->idempotencyKey != null) {
            $headers['Idempotency-Key'] = $request->idempotencyKey;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? '',
                    path: "v1/docs/{$docId}/layers/{$layerName}/annotations/pages/{$pageKey}/items/{$annotKey}",
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
                return DocAnnotationsDelete200Response::fromJson($json);
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
     * $client->doc->annotations->update(
     *     'docId',
     *     'layerName',
     *     'pageKey',
     *     'annotKey',
     *     new UpdateAnnotationsRequest([
     *         'body' => [
     *             'key' => "value",
     *         ],
     *     ]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $layerName
     * @param string $pageKey The page's address, `obj:N`: the page's indirect object number, the durable identity every `PageLayout.ref` carries. Mirrors `annotKey` and `fieldKey`.
     * @param string $annotKey The annotation's address on the page: `obj:N`, its indirect object number, or `base:N` for an annotation the uploaded file stored inline (without an object number of its own), the position it was born at in the page's /Annots. The name the annotation's `ref` carries for life.
     * @param UpdateAnnotationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DocAnnotationsUpdate200Response
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function update(string $docId, string $layerName, string $pageKey, string $annotKey, UpdateAnnotationsRequest $request, ?array $options = null): ?DocAnnotationsUpdate200Response
    {
        $options = array_merge($this->options, $options ?? []);
        $headers = [];
        if ($request->documentPassword != null) {
            $headers['X-Document-Password'] = $request->documentPassword;
        }
        if ($request->idempotencyKey != null) {
            $headers['Idempotency-Key'] = $request->idempotencyKey;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? '',
                    path: "v1/docs/{$docId}/layers/{$layerName}/annotations/pages/{$pageKey}/items/{$annotKey}",
                    method: HttpMethod::PATCH,
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
                return DocAnnotationsUpdate200Response::fromJson($json);
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
     * $client->doc->annotations->readAppearance(
     *     'docId',
     *     'layerName',
     *     'pageKey',
     *     'annotKey',
     *     new ReadAppearanceAnnotationsRequest([]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $layerName
     * @param string $pageKey The page's address, `obj:N`: the page's indirect object number, the durable identity every `PageLayout.ref` carries. Mirrors `annotKey` and `fieldKey`.
     * @param string $annotKey The annotation's address on the page: `obj:N`, its indirect object number, or `base:N` for an annotation the uploaded file stored inline (without an object number of its own), the position it was born at in the page's /Annots. The name the annotation's `ref` carries for life.
     * @param ReadAppearanceAnnotationsRequest $request
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
    public function readAppearance(string $docId, string $layerName, string $pageKey, string $annotKey, ReadAppearanceAnnotationsRequest $request = new ReadAppearanceAnnotationsRequest(), ?array $options = null): string
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
                    path: "v1/docs/{$docId}/layers/{$layerName}/annotations/pages/{$pageKey}/items/{$annotKey}/resources/appearance",
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
     * $client->doc->annotations->exportAppearance(
     *     'docId',
     *     'layerName',
     *     'pageKey',
     *     new ExportAppearanceAnnotationsRequest([
     *         'body' => [
     *             'string' => [
     *                 'key' => "value",
     *             ],
     *         ],
     *     ]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $layerName
     * @param string $pageKey The page's address, `obj:N`: the page's indirect object number, the durable identity every `PageLayout.ref` carries. Mirrors `annotKey` and `fieldKey`.
     * @param ExportAppearanceAnnotationsRequest $request
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
    public function exportAppearance(string $docId, string $layerName, string $pageKey, ExportAppearanceAnnotationsRequest $request, ?array $options = null): string
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
                    path: "v1/docs/{$docId}/layers/{$layerName}/annotations/pages/{$pageKey}/items/appearance",
                    method: HttpMethod::POST,
                    headers: $headers,
                    body: $request->body,
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
     * $client->doc->annotations->flatten(
     *     'docId',
     *     'layerName',
     *     'pageKey',
     *     new FlattenAnnotationsRequest([
     *         'body' => [
     *             'key' => "value",
     *         ],
     *     ]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $layerName
     * @param string $pageKey The page's address, `obj:N`: the page's indirect object number, the durable identity every `PageLayout.ref` carries. Mirrors `annotKey` and `fieldKey`.
     * @param FlattenAnnotationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DocAnnotationsFlatten200Response
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function flatten(string $docId, string $layerName, string $pageKey, FlattenAnnotationsRequest $request, ?array $options = null): ?DocAnnotationsFlatten200Response
    {
        $options = array_merge($this->options, $options ?? []);
        $headers = [];
        if ($request->documentPassword != null) {
            $headers['X-Document-Password'] = $request->documentPassword;
        }
        if ($request->idempotencyKey != null) {
            $headers['Idempotency-Key'] = $request->idempotencyKey;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? '',
                    path: "v1/docs/{$docId}/layers/{$layerName}/annotations/pages/{$pageKey}/items/flatten",
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
                return DocAnnotationsFlatten200Response::fromJson($json);
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
     * $client->doc->annotations->reorder(
     *     'docId',
     *     'layerName',
     *     'pageKey',
     *     new DocAnnotationsReorderRequest([
     *         'refs' => [
     *             AnnotationRef::objectNumber(new AnnotationRefObjectNumber([
     *                 'page' => new PageRef([
     *                     'kind' => PageRefKind::ObjectNumber->value,
     *                     'objectNumber' => 1,
     *                 ]),
     *                 'objectNumber' => 1,
     *             ])),
     *         ],
     *         'position' => AnnotationPositionZero::Start->value,
     *     ]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $layerName
     * @param string $pageKey The page's address, `obj:N`: the page's indirect object number, the durable identity every `PageLayout.ref` carries. Mirrors `annotKey` and `fieldKey`.
     * @param DocAnnotationsReorderRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DocAnnotationsReorder200Response
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function reorder(string $docId, string $layerName, string $pageKey, DocAnnotationsReorderRequest $request, ?array $options = null): ?DocAnnotationsReorder200Response
    {
        $options = array_merge($this->options, $options ?? []);
        $headers = [];
        if ($request->documentPassword != null) {
            $headers['X-Document-Password'] = $request->documentPassword;
        }
        if ($request->idempotencyKey != null) {
            $headers['Idempotency-Key'] = $request->idempotencyKey;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? '',
                    path: "v1/docs/{$docId}/layers/{$layerName}/annotations/pages/{$pageKey}/items/reorder",
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
                return DocAnnotationsReorder200Response::fromJson($json);
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
