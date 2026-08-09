<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocFormsGet200ResponseFieldsItemComboboxOptionsItem extends JsonSerializableType
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
     * @var bool $selected
     */
    #[JsonProperty('selected')]
    public bool $selected;

    /**
     * @param array{
     *   label: string,
     *   value: string,
     *   selected: bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->label = $values['label'];
        $this->value = $values['value'];
        $this->selected = $values['selected'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
