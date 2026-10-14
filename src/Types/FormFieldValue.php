<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class FormFieldValue extends JsonSerializableType
{
    /**
     * @var ?string $value
     */
    #[JsonProperty('value')]
    public ?string $value;

    /**
     * @var ?bool $checked
     */
    #[JsonProperty('checked')]
    public ?bool $checked;

    /**
     * @var ?array<string> $selectedValues
     */
    #[JsonProperty('selectedValues'), ArrayType(['string'])]
    public ?array $selectedValues;

    /**
     * @param array{
     *   value?: ?string,
     *   checked?: ?bool,
     *   selectedValues?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->value = $values['value'] ?? null;
        $this->checked = $values['checked'] ?? null;
        $this->selectedValues = $values['selectedValues'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
