<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;
use DateTime;
use CloudPDF\Core\Types\Date;

class DocumentsInitResponseResumedUploadPresignedPresigned extends JsonSerializableType
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
     * @var value-of<DocumentsInitResponseResumedUploadPresignedPresignedMethod> $method
     */
    #[JsonProperty('method')]
    public string $method;

    /**
     * @var DateTime $expiresAt
     */
    #[JsonProperty('expiresAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $expiresAt;

    /**
     * @param array{
     *   url: string,
     *   headers: array<string, string>,
     *   method: value-of<DocumentsInitResponseResumedUploadPresignedPresignedMethod>,
     *   expiresAt: DateTime,
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
