<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocFormsGet200ResponseFieldsItemRadioActions extends JsonSerializableType
{
    /**
     * @var ?DocFormsGet200ResponseFieldsItemRadioActionsKeystroke $keystroke
     */
    #[JsonProperty('keystroke')]
    public ?DocFormsGet200ResponseFieldsItemRadioActionsKeystroke $keystroke;

    /**
     * @var ?DocFormsGet200ResponseFieldsItemRadioActionsFormat $format
     */
    #[JsonProperty('format')]
    public ?DocFormsGet200ResponseFieldsItemRadioActionsFormat $format;

    /**
     * @var ?DocFormsGet200ResponseFieldsItemRadioActionsValidate $validate
     */
    #[JsonProperty('validate')]
    public ?DocFormsGet200ResponseFieldsItemRadioActionsValidate $validate;

    /**
     * @var ?DocFormsGet200ResponseFieldsItemRadioActionsCalculate $calculate
     */
    #[JsonProperty('calculate')]
    public ?DocFormsGet200ResponseFieldsItemRadioActionsCalculate $calculate;

    /**
     * @param array{
     *   keystroke?: ?DocFormsGet200ResponseFieldsItemRadioActionsKeystroke,
     *   format?: ?DocFormsGet200ResponseFieldsItemRadioActionsFormat,
     *   validate?: ?DocFormsGet200ResponseFieldsItemRadioActionsValidate,
     *   calculate?: ?DocFormsGet200ResponseFieldsItemRadioActionsCalculate,
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
