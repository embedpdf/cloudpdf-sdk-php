<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class PdfActionNodeResetForm extends JsonSerializableType
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
     * @param array{
     *   subtype: string,
     *   next: array<mixed>,
     *   exclude: bool,
     *   fields?: ?array<PdfActionTargetRef>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->subtype = $values['subtype'];
        $this->next = $values['next'];
        $this->fields = $values['fields'] ?? null;
        $this->exclude = $values['exclude'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
