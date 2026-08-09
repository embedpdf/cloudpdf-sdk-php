<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocFormsGet200ResponseFieldsItemTextActions extends JsonSerializableType
{
    /**
     * @var ?DocFormsGet200ResponseFieldsItemTextActionsKeystroke $keystroke
     */
    #[JsonProperty('keystroke')]
    public ?DocFormsGet200ResponseFieldsItemTextActionsKeystroke $keystroke;

    /**
     * @var ?DocFormsGet200ResponseFieldsItemTextActionsFormat $format
     */
    #[JsonProperty('format')]
    public ?DocFormsGet200ResponseFieldsItemTextActionsFormat $format;

    /**
     * @var ?DocFormsGet200ResponseFieldsItemTextActionsValidate $validate
     */
    #[JsonProperty('validate')]
    public ?DocFormsGet200ResponseFieldsItemTextActionsValidate $validate;

    /**
     * @var ?DocFormsGet200ResponseFieldsItemTextActionsCalculate $calculate
     */
    #[JsonProperty('calculate')]
    public ?DocFormsGet200ResponseFieldsItemTextActionsCalculate $calculate;

    /**
     * @param array{
     *   keystroke?: ?DocFormsGet200ResponseFieldsItemTextActionsKeystroke,
     *   format?: ?DocFormsGet200ResponseFieldsItemTextActionsFormat,
     *   validate?: ?DocFormsGet200ResponseFieldsItemTextActionsValidate,
     *   calculate?: ?DocFormsGet200ResponseFieldsItemTextActionsCalculate,
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
