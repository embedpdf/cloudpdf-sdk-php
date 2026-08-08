<?php

namespace Cloudpdf\Doc\Forms;

use Psr\Http\Client\ClientInterface;
use Cloudpdf\Core\Client\RawClient;
use Cloudpdf\Doc\Forms\Requests\GetFormsRequest;
use Cloudpdf\Types\DocFormsGet200Response;
use Cloudpdf\Exceptions\CloudpdfException;
use Cloudpdf\Exceptions\CloudpdfApiException;
use Cloudpdf\Core\Json\JsonApiRequest;
use Cloudpdf\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use Cloudpdf\Doc\Forms\Requests\ExportDataFormsRequest;
use Cloudpdf\Doc\Forms\Requests\ImportDataFormsRequest;
use Cloudpdf\Types\DocFormsImportData200Response;
use Cloudpdf\Doc\Forms\Requests\ResetFormsRequest;
use Cloudpdf\Types\DocFormsReset200Response;
use Cloudpdf\Doc\Forms\Requests\SetValueFormsRequest;
use Cloudpdf\Types\DocFormsSetValue200Response;

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
     * $client->doc->forms->get(
     *     'docId',
     *     'layerName',
     *     new GetFormsRequest([]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $layerName
     * @param GetFormsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DocFormsGet200Response
     * @throws CloudpdfException
     * @throws CloudpdfApiException
     */
    public function get(string $docId, string $layerName, GetFormsRequest $request = new GetFormsRequest(), ?array $options = null): ?DocFormsGet200Response
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
                return DocFormsGet200Response::fromJson($json);
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
     * $client->doc->forms->exportData(
     *     'docId',
     *     'layerName',
     *     new ExportDataFormsRequest([]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $layerName
     * @param ExportDataFormsRequest $request
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
    public function exportData(string $docId, string $layerName, ExportDataFormsRequest $request = new ExportDataFormsRequest(), ?array $options = null): string
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        if ($request->format != null) {
            $query['format'] = $request->format;
        }
        $headers = [];
        if ($request->documentPassword != null) {
            $headers['X-Document-Password'] = $request->documentPassword;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? '',
                    path: "v1/docs/{$docId}/layers/{$layerName}/form/data",
                    method: HttpMethod::GET,
                    headers: $headers,
                    query: $query,
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
     * $client->doc->forms->importData(
     *     'docId',
     *     'layerName',
     *     new ImportDataFormsRequest([
     *         'body' => [
     *             'key' => "value",
     *         ],
     *     ]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $layerName
     * @param ImportDataFormsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DocFormsImportData200Response
     * @throws CloudpdfException
     * @throws CloudpdfApiException
     */
    public function importData(string $docId, string $layerName, ImportDataFormsRequest $request, ?array $options = null): ?DocFormsImportData200Response
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
                    path: "v1/docs/{$docId}/layers/{$layerName}/form/data",
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
                return DocFormsImportData200Response::fromJson($json);
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
     * $client->doc->forms->reset(
     *     'docId',
     *     'layerName',
     *     'fieldKey',
     *     new ResetFormsRequest([]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $layerName
     * @param string $fieldKey
     * @param ResetFormsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DocFormsReset200Response
     * @throws CloudpdfException
     * @throws CloudpdfApiException
     */
    public function reset(string $docId, string $layerName, string $fieldKey, ResetFormsRequest $request = new ResetFormsRequest(), ?array $options = null): ?DocFormsReset200Response
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
                    path: "v1/docs/{$docId}/layers/{$layerName}/form/fields/{$fieldKey}/reset",
                    method: HttpMethod::POST,
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
                return DocFormsReset200Response::fromJson($json);
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
     * @return ?DocFormsSetValue200Response
     * @throws CloudpdfException
     * @throws CloudpdfApiException
     */
    public function setValue(string $docId, string $layerName, string $fieldKey, SetValueFormsRequest $request, ?array $options = null): ?DocFormsSetValue200Response
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
                return DocFormsSetValue200Response::fromJson($json);
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
