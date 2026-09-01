<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class PdfFieldActions extends JsonSerializableType
{
    /**
     * @var ?PdfActionTree $keystroke
     */
    #[JsonProperty('keystroke')]
    public ?PdfActionTree $keystroke;

    /**
     * @var ?PdfActionTree $format
     */
    #[JsonProperty('format')]
    public ?PdfActionTree $format;

    /**
     * @var ?PdfActionTree $validate
     */
    #[JsonProperty('validate')]
    public ?PdfActionTree $validate;

    /**
     * @var ?PdfActionTree $calculate
     */
    #[JsonProperty('calculate')]
    public ?PdfActionTree $calculate;

    /**
     * @param array{
     *   keystroke?: ?PdfActionTree,
     *   format?: ?PdfActionTree,
     *   validate?: ?PdfActionTree,
     *   calculate?: ?PdfActionTree,
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
