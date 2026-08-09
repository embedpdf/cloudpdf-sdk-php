<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocAnnotationsList200ResponseAnnotationsItemSquareInteriorColor extends JsonSerializableType
{
    /**
     * @var int $r
     */
    #[JsonProperty('r')]
    public int $r;

    /**
     * @var int $g
     */
    #[JsonProperty('g')]
    public int $g;

    /**
     * @var int $b
     */
    #[JsonProperty('b')]
    public int $b;

    /**
     * @param array{
     *   r: int,
     *   g: int,
     *   b: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->r = $values['r'];
        $this->g = $values['g'];
        $this->b = $values['b'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
