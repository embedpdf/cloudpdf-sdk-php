<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class AnnotationStrikeoutQuadPointsItem extends JsonSerializableType
{
    /**
     * @var AnnotationStrikeoutQuadPointsItemUpperLeft $upperLeft
     */
    #[JsonProperty('upperLeft')]
    public AnnotationStrikeoutQuadPointsItemUpperLeft $upperLeft;

    /**
     * @var AnnotationStrikeoutQuadPointsItemUpperRight $upperRight
     */
    #[JsonProperty('upperRight')]
    public AnnotationStrikeoutQuadPointsItemUpperRight $upperRight;

    /**
     * @var AnnotationStrikeoutQuadPointsItemLowerLeft $lowerLeft
     */
    #[JsonProperty('lowerLeft')]
    public AnnotationStrikeoutQuadPointsItemLowerLeft $lowerLeft;

    /**
     * @var AnnotationStrikeoutQuadPointsItemLowerRight $lowerRight
     */
    #[JsonProperty('lowerRight')]
    public AnnotationStrikeoutQuadPointsItemLowerRight $lowerRight;

    /**
     * @param array{
     *   upperLeft: AnnotationStrikeoutQuadPointsItemUpperLeft,
     *   upperRight: AnnotationStrikeoutQuadPointsItemUpperRight,
     *   lowerLeft: AnnotationStrikeoutQuadPointsItemLowerLeft,
     *   lowerRight: AnnotationStrikeoutQuadPointsItemLowerRight,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->upperLeft = $values['upperLeft'];
        $this->upperRight = $values['upperRight'];
        $this->lowerLeft = $values['lowerLeft'];
        $this->lowerRight = $values['lowerRight'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
