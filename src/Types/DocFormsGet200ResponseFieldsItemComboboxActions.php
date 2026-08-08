<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

class DocFormsGet200ResponseFieldsItemComboboxActions extends JsonSerializableType
{
    /**
     * @var ?DocFormsGet200ResponseFieldsItemComboboxActionsKeystroke $keystroke
     */
    #[JsonProperty('keystroke')]
    public ?DocFormsGet200ResponseFieldsItemComboboxActionsKeystroke $keystroke;

    /**
     * @var ?DocFormsGet200ResponseFieldsItemComboboxActionsFormat $format
     */
    #[JsonProperty('format')]
    public ?DocFormsGet200ResponseFieldsItemComboboxActionsFormat $format;

    /**
     * @var ?DocFormsGet200ResponseFieldsItemComboboxActionsValidate $validate
     */
    #[JsonProperty('validate')]
    public ?DocFormsGet200ResponseFieldsItemComboboxActionsValidate $validate;

    /**
     * @var ?DocFormsGet200ResponseFieldsItemComboboxActionsCalculate $calculate
     */
    #[JsonProperty('calculate')]
    public ?DocFormsGet200ResponseFieldsItemComboboxActionsCalculate $calculate;

    /**
     * @param array{
     *   keystroke?: ?DocFormsGet200ResponseFieldsItemComboboxActionsKeystroke,
     *   format?: ?DocFormsGet200ResponseFieldsItemComboboxActionsFormat,
     *   validate?: ?DocFormsGet200ResponseFieldsItemComboboxActionsValidate,
     *   calculate?: ?DocFormsGet200ResponseFieldsItemComboboxActionsCalculate,
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
