<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class FieldActionsPatch extends JsonSerializableType
{
    /**
     * @var ?FieldScriptWrite $keystroke
     */
    #[JsonProperty('keystroke')]
    public ?FieldScriptWrite $keystroke;

    /**
     * @var ?FieldScriptWrite $format
     */
    #[JsonProperty('format')]
    public ?FieldScriptWrite $format;

    /**
     * @var ?FieldScriptWrite $validate
     */
    #[JsonProperty('validate')]
    public ?FieldScriptWrite $validate;

    /**
     * @var ?FieldScriptWrite $calculate
     */
    #[JsonProperty('calculate')]
    public ?FieldScriptWrite $calculate;

    /**
     * @param array{
     *   keystroke?: ?FieldScriptWrite,
     *   format?: ?FieldScriptWrite,
     *   validate?: ?FieldScriptWrite,
     *   calculate?: ?FieldScriptWrite,
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
