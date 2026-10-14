<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class AnnotationPatchSquigglyQuadPointsItem extends JsonSerializableType
{
    /**
     * @var AnnotationPatchSquigglyQuadPointsItemUpperLeft $upperLeft
     */
    #[JsonProperty('upperLeft')]
    public AnnotationPatchSquigglyQuadPointsItemUpperLeft $upperLeft;

    /**
     * @var AnnotationPatchSquigglyQuadPointsItemUpperRight $upperRight
     */
    #[JsonProperty('upperRight')]
    public AnnotationPatchSquigglyQuadPointsItemUpperRight $upperRight;

    /**
     * @var AnnotationPatchSquigglyQuadPointsItemLowerLeft $lowerLeft
     */
    #[JsonProperty('lowerLeft')]
    public AnnotationPatchSquigglyQuadPointsItemLowerLeft $lowerLeft;

    /**
     * @var AnnotationPatchSquigglyQuadPointsItemLowerRight $lowerRight
     */
    #[JsonProperty('lowerRight')]
    public AnnotationPatchSquigglyQuadPointsItemLowerRight $lowerRight;

    /**
     * @param array{
     *   upperLeft: AnnotationPatchSquigglyQuadPointsItemUpperLeft,
     *   upperRight: AnnotationPatchSquigglyQuadPointsItemUpperRight,
     *   lowerLeft: AnnotationPatchSquigglyQuadPointsItemLowerLeft,
     *   lowerRight: AnnotationPatchSquigglyQuadPointsItemLowerRight,
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
