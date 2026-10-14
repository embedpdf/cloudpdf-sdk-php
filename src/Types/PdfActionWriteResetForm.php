<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class PdfActionWriteResetForm extends JsonSerializableType
{
    /**
     * @var ?array<PdfActionTargetRef> $fields
     */
    #[JsonProperty('fields'), ArrayType([PdfActionTargetRef::class])]
    public ?array $fields;

    /**
     * @var bool $exclude
     */
    #[JsonProperty('exclude')]
    public bool $exclude;

    /**
     * @var ?array<mixed> $next
     */
    #[JsonProperty('next'), ArrayType(['mixed'])]
    public ?array $next;

    /**
     * @param array{
     *   exclude: bool,
     *   fields?: ?array<PdfActionTargetRef>,
     *   next?: ?array<mixed>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fields = $values['fields'] ?? null;
        $this->exclude = $values['exclude'];
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
