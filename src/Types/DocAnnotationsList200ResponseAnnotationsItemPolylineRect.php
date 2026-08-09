<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocAnnotationsList200ResponseAnnotationsItemPolylineRect extends JsonSerializableType
{
    /**
     * @var float $left
     */
    #[JsonProperty('left')]
    public float $left;

    /**
     * @var float $bottom
     */
    #[JsonProperty('bottom')]
    public float $bottom;

    /**
     * @var float $right
     */
    #[JsonProperty('right')]
    public float $right;

    /**
     * @var float $top
     */
    #[JsonProperty('top')]
    public float $top;

    /**
     * @param array{
     *   left: float,
     *   bottom: float,
     *   right: float,
     *   top: float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->left = $values['left'];
        $this->bottom = $values['bottom'];
        $this->right = $values['right'];
        $this->top = $values['top'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
