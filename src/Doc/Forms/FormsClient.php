<?php

namespace CloudPDF\Doc\Forms;

use Psr\Http\Client\ClientInterface;
use CloudPDF\Core\Client\RawClient;
use CloudPDF\Doc\Forms\Requests\ListFormsRequest;
use CloudPDF\Types\DocFormsListResponse;
use CloudPDF\Exceptions\CloudPDFException;
use CloudPDF\Exceptions\CloudPDFApiException;
use CloudPDF\Core\Json\JsonApiRequest;
use CloudPDF\Environments;
use CloudPDF\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use CloudPDF\Doc\Forms\Requests\DocFormsReorderCalculationsRequest;
use CloudPDF\Types\DocFormsReorderCalculationsResponse;
use CloudPDF\Doc\Forms\Requests\SetValueFormsRequest;
use CloudPDF\Types\DocFormsSetValueResponse;
use CloudPDF\Doc\Forms\Requests\DocFormsResetRequest;
use CloudPDF\Types\DocFormsResetResponse;
use CloudPDF\Doc\Forms\Requests\DeleteWidgetFormsRequest;
use CloudPDF\Types\DocFormsDeleteWidgetResponse;
use CloudPDF\Doc\Forms\Requests\DocFormsUpdateWidgetRequest;
use CloudPDF\Types\DocFormsUpdateWidgetResponse;
use CloudPDF\Doc\Forms\Requests\DocFormsReorderWidgetsRequest;
use CloudPDF\Types\DocFormsReorderWidgetsResponse;

class FormsClient
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
     * $client->doc->forms->list(
     *     'docId',
     *     'layerName',
     *     new ListFormsRequest([]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $layerName
     * @param ListFormsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DocFormsListResponse
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function list(string $docId, string $layerName, ListFormsRequest $request = new ListFormsRequest(), ?array $options = null): ?DocFormsListResponse
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
                    path: "v1/docs/{$docId}/layers/{$layerName}/form",
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
                return DocFormsListResponse::fromJson($json);
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
     * $client->doc->forms->reorderCalculations(
     *     'docId',
     *     'layerName',
     *     new DocFormsReorderCalculationsRequest([
     *         'fields' => [
     *             FormFieldRef::objectNumber(new FormFieldRefObjectNumber([
     *                 'objectNumber' => 1,
     *             ])),
     *         ],
     *         'position' => FieldPositionZero::Start->value,
     *     ]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $layerName
     * @param DocFormsReorderCalculationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DocFormsReorderCalculationsResponse
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function reorderCalculations(string $docId, string $layerName, DocFormsReorderCalculationsRequest $request, ?array $options = null): ?DocFormsReorderCalculationsResponse
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
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Saas->value,
                    path: "v1/docs/{$docId}/layers/{$layerName}/form/calculations/reorder",
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
                return DocFormsReorderCalculationsResponse::fromJson($json);
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
     * $client->doc->forms->setValue(
     *     'docId',
     *     'layerName',
     *     'fieldKey',
     *     new SetValueFormsRequest([
     *         'body' => [
     *             'key' => "value",
     *         ],
     *     ]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $layerName
     * @param string $fieldKey
     * @param SetValueFormsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DocFormsSetValueResponse
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function setValue(string $docId, string $layerName, string $fieldKey, SetValueFormsRequest $request, ?array $options = null): ?DocFormsSetValueResponse
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
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Saas->value,
                    path: "v1/docs/{$docId}/layers/{$layerName}/form/fields/{$fieldKey}/value",
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
                return DocFormsSetValueResponse::fromJson($json);
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
     * $client->doc->forms->reset(
     *     'docId',
     *     'layerName',
     *     new DocFormsResetRequest([]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $layerName
     * @param DocFormsResetRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DocFormsResetResponse
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function reset(string $docId, string $layerName, DocFormsResetRequest $request = new DocFormsResetRequest(), ?array $options = null): ?DocFormsResetResponse
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
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Saas->value,
                    path: "v1/docs/{$docId}/layers/{$layerName}/form/reset",
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
                return DocFormsResetResponse::fromJson($json);
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
     * $client->doc->forms->deleteWidget(
     *     'docId',
     *     'layerName',
     *     'pageKey',
     *     'annotationKey',
     *     new DeleteWidgetFormsRequest([]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $layerName
     * @param string $pageKey The page's address, `obj:N`: the page's indirect object number, the durable identity every `PageLayout.ref` carries. Mirrors `annotationKey` and `fieldKey`.
     * @param string $annotationKey The annotation's address on the page: `obj:N`, its indirect object number, or `base:N` for an annotation the uploaded file stored inline (without an object number of its own), the position it was born at in the page's /Annots. The name the annotation's `ref` carries for life.
     * @param DeleteWidgetFormsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DocFormsDeleteWidgetResponse
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function deleteWidget(string $docId, string $layerName, string $pageKey, string $annotationKey, DeleteWidgetFormsRequest $request = new DeleteWidgetFormsRequest(), ?array $options = null): ?DocFormsDeleteWidgetResponse
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
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Saas->value,
                    path: "v1/docs/{$docId}/layers/{$layerName}/form/widgets/{$pageKey}/{$annotationKey}",
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
                return DocFormsDeleteWidgetResponse::fromJson($json);
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
     * $client->doc->forms->updateWidget(
     *     'docId',
     *     'layerName',
     *     'pageKey',
     *     'annotationKey',
     *     new DocFormsUpdateWidgetRequest([
     *         'patch' => new WidgetPatch([]),
     *     ]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $layerName
     * @param string $pageKey The page's address, `obj:N`: the page's indirect object number, the durable identity every `PageLayout.ref` carries. Mirrors `annotationKey` and `fieldKey`.
     * @param string $annotationKey The annotation's address on the page: `obj:N`, its indirect object number, or `base:N` for an annotation the uploaded file stored inline (without an object number of its own), the position it was born at in the page's /Annots. The name the annotation's `ref` carries for life.
     * @param DocFormsUpdateWidgetRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DocFormsUpdateWidgetResponse
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function updateWidget(string $docId, string $layerName, string $pageKey, string $annotationKey, DocFormsUpdateWidgetRequest $request, ?array $options = null): ?DocFormsUpdateWidgetResponse
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
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Saas->value,
                    path: "v1/docs/{$docId}/layers/{$layerName}/form/widgets/{$pageKey}/{$annotationKey}",
                    method: HttpMethod::PATCH,
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
                return DocFormsUpdateWidgetResponse::fromJson($json);
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
     * $client->doc->forms->reorderWidgets(
     *     'docId',
     *     'layerName',
     *     'pageKey',
     *     new DocFormsReorderWidgetsRequest([
     *         'widgets' => [
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
     * @param string $pageKey The page's address, `obj:N`: the page's indirect object number, the durable identity every `PageLayout.ref` carries. Mirrors `annotationKey` and `fieldKey`.
     * @param DocFormsReorderWidgetsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DocFormsReorderWidgetsResponse
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function reorderWidgets(string $docId, string $layerName, string $pageKey, DocFormsReorderWidgetsRequest $request, ?array $options = null): ?DocFormsReorderWidgetsResponse
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
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Saas->value,
                    path: "v1/docs/{$docId}/layers/{$layerName}/form/widgets/{$pageKey}/reorder",
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
                return DocFormsReorderWidgetsResponse::fromJson($json);
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
