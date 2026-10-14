<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class AnnotationUnsupportedRect extends JsonSerializableType
{
    /**
     * @var float $x
     */
    #[JsonProperty('x')]
    public float $x;

    /**
     * @var float $y
     */
    #[JsonProperty('y')]
    public float $y;

    /**
     * @var float $width
     */
    #[JsonProperty('width')]
    public float $width;

    /**
     * @var float $height
     */
    #[JsonProperty('height')]
    public float $height;

    /**
     * @param array{
     *   x: float,
     *   y: float,
     *   width: float,
     *   height: float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->x = $values['x'];
        $this->y = $values['y'];
        $this->width = $values['width'];
        $this->height = $values['height'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
