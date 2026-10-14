<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class FormFieldPatchOptionsItem extends JsonSerializableType
{
    /**
     * @var string $label
     */
    #[JsonProperty('label')]
    public string $label;

    /**
     * @var string $value
     */
    #[JsonProperty('value')]
    public string $value;

    /**
     * @param array{
     *   label: string,
     *   value: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->label = $values['label'];
        $this->value = $values['value'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
