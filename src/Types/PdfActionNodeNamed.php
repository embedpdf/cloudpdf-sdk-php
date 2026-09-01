<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class PdfActionNodeNamed extends JsonSerializableType
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
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @param array{
     *   subtype: string,
     *   next: array<mixed>,
     *   name: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->subtype = $values['subtype'];
        $this->next = $values['next'];
        $this->name = $values['name'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
