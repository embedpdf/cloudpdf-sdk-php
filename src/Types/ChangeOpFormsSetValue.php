<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class ChangeOpFormsSetValue extends JsonSerializableType
{
    /**
     * @var FormFieldRef $field
     */
    #[JsonProperty('field')]
    public FormFieldRef $field;

    /**
     * @var FormFieldValue $value
     */
    #[JsonProperty('value')]
    public FormFieldValue $value;

    /**
     * @var ?FormFieldValue $expect
     */
    #[JsonProperty('expect')]
    public ?FormFieldValue $expect;

    /**
     * @param array{
     *   field: FormFieldRef,
     *   value: FormFieldValue,
     *   expect?: ?FormFieldValue,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->field = $values['field'];
        $this->value = $values['value'];
        $this->expect = $values['expect'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
