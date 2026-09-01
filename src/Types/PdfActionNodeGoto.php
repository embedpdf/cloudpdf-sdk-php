<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class PdfActionNodeGoto extends JsonSerializableType
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
     * @var PdfDestination $destination
     */
    #[JsonProperty('destination')]
    public PdfDestination $destination;

    /**
     * @param array{
     *   subtype: string,
     *   next: array<mixed>,
     *   destination: PdfDestination,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->subtype = $values['subtype'];
        $this->next = $values['next'];
        $this->destination = $values['destination'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
