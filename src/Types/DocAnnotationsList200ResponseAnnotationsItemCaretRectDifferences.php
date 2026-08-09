<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocAnnotationsList200ResponseAnnotationsItemCaretRectDifferences extends JsonSerializableType
{
    /**
     * @var float $left
     */
    #[JsonProperty('left')]
    public float $left;

    /**
     * @var float $top
     */
    #[JsonProperty('top')]
    public float $top;

    /**
     * @var float $right
     */
    #[JsonProperty('right')]
    public float $right;

    /**
     * @var float $bottom
     */
    #[JsonProperty('bottom')]
    public float $bottom;

    /**
     * @param array{
     *   left: float,
     *   top: float,
     *   right: float,
     *   bottom: float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->left = $values['left'];
        $this->top = $values['top'];
        $this->right = $values['right'];
        $this->bottom = $values['bottom'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
