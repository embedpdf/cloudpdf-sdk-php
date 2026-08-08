<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;
use Cloudpdf\Core\Types\ArrayType;

class DocumentsInit200ResponseResumedUploadPresignedPresigned extends JsonSerializableType
{
    /**
     * @var string $url
     */
    #[JsonProperty('url')]
    public string $url;

    /**
     * @var array<string, string> $headers
     */
    #[JsonProperty('headers'), ArrayType(['string' => 'string'])]
    public array $headers;

    /**
     * @var value-of<DocumentsInit200ResponseResumedUploadPresignedPresignedMethod> $method
     */
    #[JsonProperty('method')]
    public string $method;

    /**
     * @var float $expiresAt
     */
    #[JsonProperty('expiresAt')]
    public float $expiresAt;

    /**
     * @param array{
     *   url: string,
     *   headers: array<string, string>,
     *   method: value-of<DocumentsInit200ResponseResumedUploadPresignedPresignedMethod>,
     *   expiresAt: float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->url = $values['url'];
        $this->headers = $values['headers'];
        $this->method = $values['method'];
        $this->expiresAt = $values['expiresAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
