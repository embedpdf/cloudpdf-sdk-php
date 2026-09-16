<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocAnnotationsList200ResponseAnnotationsItemFreeTextRichTextBodyMargins extends JsonSerializableType
{
    /**
     * @var float $top
     */
    #[JsonProperty('top')]
    public float $top;

    /**
     * @var float $bottom
     */
    #[JsonProperty('bottom')]
    public float $bottom;

    /**
     * @var float $left
     */
    #[JsonProperty('left')]
    public float $left;

    /**
     * @var float $right
     */
    #[JsonProperty('right')]
    public float $right;

    /**
     * @param array{
     *   top: float,
     *   bottom: float,
     *   left: float,
     *   right: float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->top = $values['top'];
        $this->bottom = $values['bottom'];
        $this->left = $values['left'];
        $this->right = $values['right'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
