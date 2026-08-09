<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocFormsGet200ResponseFieldsItemCheckboxActions extends JsonSerializableType
{
    /**
     * @var ?DocFormsGet200ResponseFieldsItemCheckboxActionsKeystroke $keystroke
     */
    #[JsonProperty('keystroke')]
    public ?DocFormsGet200ResponseFieldsItemCheckboxActionsKeystroke $keystroke;

    /**
     * @var ?DocFormsGet200ResponseFieldsItemCheckboxActionsFormat $format
     */
    #[JsonProperty('format')]
    public ?DocFormsGet200ResponseFieldsItemCheckboxActionsFormat $format;

    /**
     * @var ?DocFormsGet200ResponseFieldsItemCheckboxActionsValidate $validate
     */
    #[JsonProperty('validate')]
    public ?DocFormsGet200ResponseFieldsItemCheckboxActionsValidate $validate;

    /**
     * @var ?DocFormsGet200ResponseFieldsItemCheckboxActionsCalculate $calculate
     */
    #[JsonProperty('calculate')]
    public ?DocFormsGet200ResponseFieldsItemCheckboxActionsCalculate $calculate;

    /**
     * @param array{
     *   keystroke?: ?DocFormsGet200ResponseFieldsItemCheckboxActionsKeystroke,
     *   format?: ?DocFormsGet200ResponseFieldsItemCheckboxActionsFormat,
     *   validate?: ?DocFormsGet200ResponseFieldsItemCheckboxActionsValidate,
     *   calculate?: ?DocFormsGet200ResponseFieldsItemCheckboxActionsCalculate,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->keystroke = $values['keystroke'] ?? null;
        $this->format = $values['format'] ?? null;
        $this->validate = $values['validate'] ?? null;
        $this->calculate = $values['calculate'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
