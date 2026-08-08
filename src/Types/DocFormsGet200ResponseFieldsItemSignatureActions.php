<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

class DocFormsGet200ResponseFieldsItemSignatureActions extends JsonSerializableType
{
    /**
     * @var ?DocFormsGet200ResponseFieldsItemSignatureActionsKeystroke $keystroke
     */
    #[JsonProperty('keystroke')]
    public ?DocFormsGet200ResponseFieldsItemSignatureActionsKeystroke $keystroke;

    /**
     * @var ?DocFormsGet200ResponseFieldsItemSignatureActionsFormat $format
     */
    #[JsonProperty('format')]
    public ?DocFormsGet200ResponseFieldsItemSignatureActionsFormat $format;

    /**
     * @var ?DocFormsGet200ResponseFieldsItemSignatureActionsValidate $validate
     */
    #[JsonProperty('validate')]
    public ?DocFormsGet200ResponseFieldsItemSignatureActionsValidate $validate;

    /**
     * @var ?DocFormsGet200ResponseFieldsItemSignatureActionsCalculate $calculate
     */
    #[JsonProperty('calculate')]
    public ?DocFormsGet200ResponseFieldsItemSignatureActionsCalculate $calculate;

    /**
     * @param array{
     *   keystroke?: ?DocFormsGet200ResponseFieldsItemSignatureActionsKeystroke,
     *   format?: ?DocFormsGet200ResponseFieldsItemSignatureActionsFormat,
     *   validate?: ?DocFormsGet200ResponseFieldsItemSignatureActionsValidate,
     *   calculate?: ?DocFormsGet200ResponseFieldsItemSignatureActionsCalculate,
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
