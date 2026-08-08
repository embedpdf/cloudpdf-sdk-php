<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

class DocFormsGet200ResponseFieldsItemListboxActions extends JsonSerializableType
{
    /**
     * @var ?DocFormsGet200ResponseFieldsItemListboxActionsKeystroke $keystroke
     */
    #[JsonProperty('keystroke')]
    public ?DocFormsGet200ResponseFieldsItemListboxActionsKeystroke $keystroke;

    /**
     * @var ?DocFormsGet200ResponseFieldsItemListboxActionsFormat $format
     */
    #[JsonProperty('format')]
    public ?DocFormsGet200ResponseFieldsItemListboxActionsFormat $format;

    /**
     * @var ?DocFormsGet200ResponseFieldsItemListboxActionsValidate $validate
     */
    #[JsonProperty('validate')]
    public ?DocFormsGet200ResponseFieldsItemListboxActionsValidate $validate;

    /**
     * @var ?DocFormsGet200ResponseFieldsItemListboxActionsCalculate $calculate
     */
    #[JsonProperty('calculate')]
    public ?DocFormsGet200ResponseFieldsItemListboxActionsCalculate $calculate;

    /**
     * @param array{
     *   keystroke?: ?DocFormsGet200ResponseFieldsItemListboxActionsKeystroke,
     *   format?: ?DocFormsGet200ResponseFieldsItemListboxActionsFormat,
     *   validate?: ?DocFormsGet200ResponseFieldsItemListboxActionsValidate,
     *   calculate?: ?DocFormsGet200ResponseFieldsItemListboxActionsCalculate,
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
