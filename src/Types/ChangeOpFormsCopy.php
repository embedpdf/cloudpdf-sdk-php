<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class ChangeOpFormsCopy extends JsonSerializableType
{
    /**
     * @var array<FormFieldRef> $fields
     */
    #[JsonProperty('fields'), ArrayType([FormFieldRef::class])]
    public array $fields;

    /**
     * @var ?array<AnnotationRef> $widgets
     */
    #[JsonProperty('widgets'), ArrayType([AnnotationRef::class])]
    public ?array $widgets;

    /**
     * @var ?PageRef $page
     */
    #[JsonProperty('page')]
    public ?PageRef $page;

    /**
     * @var ?ChangeOpFormsCopyOffset $offset
     */
    #[JsonProperty('offset')]
    public ?ChangeOpFormsCopyOffset $offset;

    /**
     * @var ?bool $values
     */
    #[JsonProperty('values')]
    public ?bool $values;

    /**
     * @var ?array<int> $objectNumbers
     */
    #[JsonProperty('objectNumbers'), ArrayType(['integer'])]
    public ?array $objectNumbers;

    /**
     * @param array{
     *   fields: array<FormFieldRef>,
     *   widgets?: ?array<AnnotationRef>,
     *   page?: ?PageRef,
     *   offset?: ?ChangeOpFormsCopyOffset,
     *   values?: ?bool,
     *   objectNumbers?: ?array<int>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fields = $values['fields'];
        $this->widgets = $values['widgets'] ?? null;
        $this->page = $values['page'] ?? null;
        $this->offset = $values['offset'] ?? null;
        $this->values = $values['values'] ?? null;
        $this->objectNumbers = $values['objectNumbers'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
