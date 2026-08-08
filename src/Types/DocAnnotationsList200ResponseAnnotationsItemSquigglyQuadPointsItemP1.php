<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

class DocAnnotationsList200ResponseAnnotationsItemSquigglyQuadPointsItemP1 extends JsonSerializableType
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
     * @param array{
     *   x: float,
     *   y: float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->x = $values['x'];
        $this->y = $values['y'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
