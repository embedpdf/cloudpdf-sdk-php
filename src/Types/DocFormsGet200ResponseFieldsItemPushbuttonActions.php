<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocFormsGet200ResponseFieldsItemPushbuttonActions extends JsonSerializableType
{
    /**
     * @var ?DocFormsGet200ResponseFieldsItemPushbuttonActionsKeystroke $keystroke
     */
    #[JsonProperty('keystroke')]
    public ?DocFormsGet200ResponseFieldsItemPushbuttonActionsKeystroke $keystroke;

    /**
     * @var ?DocFormsGet200ResponseFieldsItemPushbuttonActionsFormat $format
     */
    #[JsonProperty('format')]
    public ?DocFormsGet200ResponseFieldsItemPushbuttonActionsFormat $format;

    /**
     * @var ?DocFormsGet200ResponseFieldsItemPushbuttonActionsValidate $validate
     */
    #[JsonProperty('validate')]
    public ?DocFormsGet200ResponseFieldsItemPushbuttonActionsValidate $validate;

    /**
     * @var ?DocFormsGet200ResponseFieldsItemPushbuttonActionsCalculate $calculate
     */
    #[JsonProperty('calculate')]
    public ?DocFormsGet200ResponseFieldsItemPushbuttonActionsCalculate $calculate;

    /**
     * @param array{
     *   keystroke?: ?DocFormsGet200ResponseFieldsItemPushbuttonActionsKeystroke,
     *   format?: ?DocFormsGet200ResponseFieldsItemPushbuttonActionsFormat,
     *   validate?: ?DocFormsGet200ResponseFieldsItemPushbuttonActionsValidate,
     *   calculate?: ?DocFormsGet200ResponseFieldsItemPushbuttonActionsCalculate,
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
