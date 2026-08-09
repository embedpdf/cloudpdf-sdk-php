<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocAnnotationsList200ResponseAnnotationsItemStrikeoutQuadPointsItem extends JsonSerializableType
{
    /**
     * @var DocAnnotationsList200ResponseAnnotationsItemStrikeoutQuadPointsItemP1 $p1
     */
    #[JsonProperty('p1')]
    public DocAnnotationsList200ResponseAnnotationsItemStrikeoutQuadPointsItemP1 $p1;

    /**
     * @var DocAnnotationsList200ResponseAnnotationsItemStrikeoutQuadPointsItemP2 $p2
     */
    #[JsonProperty('p2')]
    public DocAnnotationsList200ResponseAnnotationsItemStrikeoutQuadPointsItemP2 $p2;

    /**
     * @var DocAnnotationsList200ResponseAnnotationsItemStrikeoutQuadPointsItemP3 $p3
     */
    #[JsonProperty('p3')]
    public DocAnnotationsList200ResponseAnnotationsItemStrikeoutQuadPointsItemP3 $p3;

    /**
     * @var DocAnnotationsList200ResponseAnnotationsItemStrikeoutQuadPointsItemP4 $p4
     */
    #[JsonProperty('p4')]
    public DocAnnotationsList200ResponseAnnotationsItemStrikeoutQuadPointsItemP4 $p4;

    /**
     * @param array{
     *   p1: DocAnnotationsList200ResponseAnnotationsItemStrikeoutQuadPointsItemP1,
     *   p2: DocAnnotationsList200ResponseAnnotationsItemStrikeoutQuadPointsItemP2,
     *   p3: DocAnnotationsList200ResponseAnnotationsItemStrikeoutQuadPointsItemP3,
     *   p4: DocAnnotationsList200ResponseAnnotationsItemStrikeoutQuadPointsItemP4,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->p1 = $values['p1'];
        $this->p2 = $values['p2'];
        $this->p3 = $values['p3'];
        $this->p4 = $values['p4'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
