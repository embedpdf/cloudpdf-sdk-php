<?php

namespace CloudPDF\Doc\Signatures;

use Psr\Http\Client\ClientInterface;
use CloudPDF\Core\Client\RawClient;
use CloudPDF\Doc\Signatures\Requests\ListSignaturesRequest;
use CloudPDF\Types\DocSignaturesListResponse;
use CloudPDF\Exceptions\CloudPDFException;
use CloudPDF\Exceptions\CloudPDFApiException;
use CloudPDF\Core\Json\JsonApiRequest;
use CloudPDF\Environments;
use CloudPDF\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use CloudPDF\Doc\Signatures\Requests\CancelSignaturesRequest;
use CloudPDF\Types\DocSignaturesCancelResponse;
use CloudPDF\Doc\Signatures\Requests\DocSignaturesCompleteRequest;
use CloudPDF\Types\DocSignaturesCompleteResponse;
use CloudPDF\Doc\Signatures\Requests\AnalysisSignaturesRequest;
use CloudPDF\Types\DocSignaturesAnalysisResponse;
use CloudPDF\Doc\Signatures\Requests\PrepareSignaturesRequest;
use CloudPDF\Types\DocSignaturesPrepareResponse;
use CloudPDF\Core\Multipart\MultipartFormData;
use CloudPDF\Core\Multipart\MultipartApiRequest;
use CloudPDF\Doc\Signatures\Requests\ValidationInfoSignaturesRequest;
use CloudPDF\Types\DocSignaturesValidationInfoResponse;
use CloudPDF\Doc\Signatures\Requests\DocSignaturesAddValidationInfoRequest;
use CloudPDF\Types\DocSignaturesAddValidationInfoResponse;

class SignaturesClient
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
     * Describes the bytes the layer is over: the base version's signatures plus the layer's own edits as the last revision. Signed bytes (contents, digests, revision prefixes) are served per base version under /versions.
     *
     * Example:
     * ```php
     * $client->doc->signatures->list(
     *     'docId',
     *     'layerName',
     *     new ListSignaturesRequest([]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $layerName
     * @param ListSignaturesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DocSignaturesListResponse
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function list(string $docId, string $layerName, ListSignaturesRequest $request = new ListSignaturesRequest(), ?array $options = null): ?DocSignaturesListResponse
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
                    path: "v1/docs/{$docId}/layers/{$layerName}/signatures",
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
                return DocSignaturesListResponse::fromJson($json);
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
     * $client->doc->signatures->cancel(
     *     'docId',
     *     'layerName',
     *     'signingId',
     *     new CancelSignaturesRequest([]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $layerName
     * @param string $signingId
     * @param CancelSignaturesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DocSignaturesCancelResponse
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function cancel(string $docId, string $layerName, string $signingId, CancelSignaturesRequest $request = new CancelSignaturesRequest(), ?array $options = null): ?DocSignaturesCancelResponse
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
                    path: "v1/docs/{$docId}/layers/{$layerName}/signatures/{$signingId}",
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
                return DocSignaturesCancelResponse::fromJson($json);
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
     * `cms` is the detached CMS over the prepared digest, base64. `expectedVersion` must be what prepare returned. Idempotent by signing id: the same CMS again answers `already-completed`. The new version is the layer's own: only this layer moves to it, and the document and every other layer stay as they were. Refetch the manifest after a completion.
     *
     * Example:
     * ```php
     * $client->doc->signatures->complete(
     *     'docId',
     *     'layerName',
     *     'signingId',
     *     new DocSignaturesCompleteRequest([
     *         'cms' => 'cms',
     *         'expectedVersion' => new DocSignaturesCompleteRequestExpectedVersion([
     *             'baseSha256' => 'baseSha256',
     *             'editsVersion' => 1,
     *         ]),
     *     ]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $layerName
     * @param string $signingId
     * @param DocSignaturesCompleteRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DocSignaturesCompleteResponse
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function complete(string $docId, string $layerName, string $signingId, DocSignaturesCompleteRequest $request, ?array $options = null): ?DocSignaturesCompleteResponse
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
                    path: "v1/docs/{$docId}/layers/{$layerName}/signatures/{$signingId}/complete",
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
                return DocSignaturesCompleteResponse::fromJson($json);
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
     * Exactly one of `since.signature=<index>` or `since.revision=<index>`; the layer's pending edits are the end. `level=fill|annotate|lta|none` evaluates exploratorily and never becomes a verdict. For history between two base revisions use the version analysis.
     *
     * Example:
     * ```php
     * $client->doc->signatures->analysis(
     *     'docId',
     *     'layerName',
     *     new AnalysisSignaturesRequest([]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $layerName
     * @param AnalysisSignaturesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DocSignaturesAnalysisResponse
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function analysis(string $docId, string $layerName, AnalysisSignaturesRequest $request = new AnalysisSignaturesRequest(), ?array $options = null): ?DocSignaturesAnalysisResponse
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
        $headers = [];
        if ($request->documentPassword != null) {
            $headers['X-Document-Password'] = $request->documentPassword;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Saas->value,
                    path: "v1/docs/{$docId}/layers/{$layerName}/signatures/analysis",
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
                return DocSignaturesAnalysisResponse::fromJson($json);
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
     * Multipart: a JSON `body` part (field, subFilter, digest, contentsSize, signer, certify, lock), naming the appearance PDF it may carry as `resources: { appearance: '<key>' }`, and that PDF as the part `resource:<key>`. A certification (`certify.permission`) additionally requires `doc.sign.certify`. The layer is read-only until the signing completes, is cancelled, or expires (15 minutes). A document timestamp (`kind: 'timestamp'`) may leave `field` out, since 3.3: the engine then makes a field of no size for it, under a name no other field has, and the answer names it in `field`. That needs `doc.sign` for the document. The signature is made over the layer's own base: the upload, or the version its last signature made.
     *
     * Example:
     * ```php
     * $client->doc->signatures->prepare(
     *     'docId',
     *     'layerName',
     *     new PrepareSignaturesRequest([
     *         'file' => File::createFromString("example_file", "example_file"),
     *     ]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $layerName
     * @param PrepareSignaturesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     * } $options
     * @return ?DocSignaturesPrepareResponse
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function prepare(string $docId, string $layerName, PrepareSignaturesRequest $request, ?array $options = null): ?DocSignaturesPrepareResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $headers = [];
        if ($request->documentPassword != null) {
            $headers['X-Document-Password'] = $request->documentPassword;
        }
        $body = new MultipartFormData();
        $body->addPart($request->file->toMultipartFormDataPart('file'));
        try {
            $response = $this->client->sendRequest(
                new MultipartApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Saas->value,
                    path: "v1/docs/{$docId}/layers/{$layerName}/signatures/prepare",
                    method: HttpMethod::POST,
                    headers: $headers,
                    body: $body,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return DocSignaturesPrepareResponse::fromJson($json);
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
     * Each entry is one DER object, base64. It reads the layer as it is now, so entries stored and not yet sealed by a signature are among them. Arrived in 3.3.
     *
     * Example:
     * ```php
     * $client->doc->signatures->validationInfo(
     *     'docId',
     *     'layerName',
     *     new ValidationInfoSignaturesRequest([]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $layerName
     * @param ValidationInfoSignaturesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DocSignaturesValidationInfoResponse
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function validationInfo(string $docId, string $layerName, ValidationInfoSignaturesRequest $request = new ValidationInfoSignaturesRequest(), ?array $options = null): ?DocSignaturesValidationInfoResponse
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
                    path: "v1/docs/{$docId}/layers/{$layerName}/signatures/validation-info",
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
                return DocSignaturesValidationInfoResponse::fromJson($json);
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
     * Each entry is one DER object of at most 16 MiB, base64. An entry the file already holds, byte for byte, is not stored again: `added` counts the new ones. An entry that is not one DER object fails the request and nothing is stored; the error names it, as in `certificates[1]`. The server stores what it is given and asks no certificate authority: collect the answers first. It needs `doc.sign` for the document, not for a group of fields, and is refused after a certification that allows no changes. It cannot be undone, and it leaves undo for earlier changes as it was. Arrived in 3.3.
     *
     * Example:
     * ```php
     * $client->doc->signatures->addValidationInfo(
     *     'docId',
     *     'layerName',
     *     new DocSignaturesAddValidationInfoRequest([]),
     * );
     * ```
     *
     * @param string $docId
     * @param string $layerName
     * @param DocSignaturesAddValidationInfoRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DocSignaturesAddValidationInfoResponse
     * @throws CloudPDFException
     * @throws CloudPDFApiException
     */
    public function addValidationInfo(string $docId, string $layerName, DocSignaturesAddValidationInfoRequest $request = new DocSignaturesAddValidationInfoRequest(), ?array $options = null): ?DocSignaturesAddValidationInfoResponse
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
                    path: "v1/docs/{$docId}/layers/{$layerName}/signatures/validation-info",
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
                return DocSignaturesAddValidationInfoResponse::fromJson($json);
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
