<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class PdfActionNodeUri extends JsonSerializableType
{
    /**
     * @var string $subtype
     */
    #[JsonProperty('subtype')]
    public string $subtype;

    /**
     * @var array<mixed> $next
     */
    #[JsonProperty('next'), ArrayType(['mixed'])]
    public array $next;

    /**
     * @var string $uri
     */
    #[JsonProperty('uri')]
    public string $uri;

    /**
     * @var bool $isMap
     */
    #[JsonProperty('isMap')]
    public bool $isMap;

    /**
     * @param array{
     *   subtype: string,
     *   next: array<mixed>,
     *   uri: string,
     *   isMap: bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->subtype = $values['subtype'];
        $this->next = $values['next'];
        $this->uri = $values['uri'];
        $this->isMap = $values['isMap'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
