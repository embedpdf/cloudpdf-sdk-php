<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class AnnotationPatchStrikeoutQuadPointsItem extends JsonSerializableType
{
    /**
     * @var AnnotationPatchStrikeoutQuadPointsItemUpperLeft $upperLeft
     */
    #[JsonProperty('upperLeft')]
    public AnnotationPatchStrikeoutQuadPointsItemUpperLeft $upperLeft;

    /**
     * @var AnnotationPatchStrikeoutQuadPointsItemUpperRight $upperRight
     */
    #[JsonProperty('upperRight')]
    public AnnotationPatchStrikeoutQuadPointsItemUpperRight $upperRight;

    /**
     * @var AnnotationPatchStrikeoutQuadPointsItemLowerLeft $lowerLeft
     */
    #[JsonProperty('lowerLeft')]
    public AnnotationPatchStrikeoutQuadPointsItemLowerLeft $lowerLeft;

    /**
     * @var AnnotationPatchStrikeoutQuadPointsItemLowerRight $lowerRight
     */
    #[JsonProperty('lowerRight')]
    public AnnotationPatchStrikeoutQuadPointsItemLowerRight $lowerRight;

    /**
     * @param array{
     *   upperLeft: AnnotationPatchStrikeoutQuadPointsItemUpperLeft,
     *   upperRight: AnnotationPatchStrikeoutQuadPointsItemUpperRight,
     *   lowerLeft: AnnotationPatchStrikeoutQuadPointsItemLowerLeft,
     *   lowerRight: AnnotationPatchStrikeoutQuadPointsItemLowerRight,
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
