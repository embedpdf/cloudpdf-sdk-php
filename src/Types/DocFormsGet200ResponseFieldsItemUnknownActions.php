<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocFormsGet200ResponseFieldsItemUnknownActions extends JsonSerializableType
{
    /**
     * @var ?DocFormsGet200ResponseFieldsItemUnknownActionsKeystroke $keystroke
     */
    #[JsonProperty('keystroke')]
    public ?DocFormsGet200ResponseFieldsItemUnknownActionsKeystroke $keystroke;

    /**
     * @var ?DocFormsGet200ResponseFieldsItemUnknownActionsFormat $format
     */
    #[JsonProperty('format')]
    public ?DocFormsGet200ResponseFieldsItemUnknownActionsFormat $format;

    /**
     * @var ?DocFormsGet200ResponseFieldsItemUnknownActionsValidate $validate
     */
    #[JsonProperty('validate')]
    public ?DocFormsGet200ResponseFieldsItemUnknownActionsValidate $validate;

    /**
     * @var ?DocFormsGet200ResponseFieldsItemUnknownActionsCalculate $calculate
     */
    #[JsonProperty('calculate')]
    public ?DocFormsGet200ResponseFieldsItemUnknownActionsCalculate $calculate;

    /**
     * @param array{
     *   keystroke?: ?DocFormsGet200ResponseFieldsItemUnknownActionsKeystroke,
     *   format?: ?DocFormsGet200ResponseFieldsItemUnknownActionsFormat,
     *   validate?: ?DocFormsGet200ResponseFieldsItemUnknownActionsValidate,
     *   calculate?: ?DocFormsGet200ResponseFieldsItemUnknownActionsCalculate,
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
