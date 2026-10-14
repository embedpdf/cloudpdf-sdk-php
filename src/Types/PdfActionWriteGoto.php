<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class PdfActionWriteGoto extends JsonSerializableType
{
    /**
     * @var PageDestination $destination
     */
    #[JsonProperty('destination')]
    public PageDestination $destination;

    /**
     * @var ?array<mixed> $next
     */
    #[JsonProperty('next'), ArrayType(['mixed'])]
    public ?array $next;

    /**
     * @param array{
     *   destination: PageDestination,
     *   next?: ?array<mixed>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->destination = $values['destination'];
        $this->next = $values['next'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
