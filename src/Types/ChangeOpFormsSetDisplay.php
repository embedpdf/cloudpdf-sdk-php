<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class ChangeOpFormsSetDisplay extends JsonSerializableType
{
    /**
     * @var FormFieldRef $field
     */
    #[JsonProperty('field')]
    public FormFieldRef $field;

    /**
     * @var value-of<ChangeOpFormsSetDisplayDisplay> $display
     */
    #[JsonProperty('display')]
    public string $display;

    /**
     * @param array{
     *   field: FormFieldRef,
     *   display: value-of<ChangeOpFormsSetDisplayDisplay>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->field = $values['field'];
        $this->display = $values['display'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
