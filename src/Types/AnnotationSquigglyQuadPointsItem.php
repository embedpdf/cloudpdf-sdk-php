<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class AnnotationSquigglyQuadPointsItem extends JsonSerializableType
{
    /**
     * @var AnnotationSquigglyQuadPointsItemUpperLeft $upperLeft
     */
    #[JsonProperty('upperLeft')]
    public AnnotationSquigglyQuadPointsItemUpperLeft $upperLeft;

    /**
     * @var AnnotationSquigglyQuadPointsItemUpperRight $upperRight
     */
    #[JsonProperty('upperRight')]
    public AnnotationSquigglyQuadPointsItemUpperRight $upperRight;

    /**
     * @var AnnotationSquigglyQuadPointsItemLowerLeft $lowerLeft
     */
    #[JsonProperty('lowerLeft')]
    public AnnotationSquigglyQuadPointsItemLowerLeft $lowerLeft;

    /**
     * @var AnnotationSquigglyQuadPointsItemLowerRight $lowerRight
     */
    #[JsonProperty('lowerRight')]
    public AnnotationSquigglyQuadPointsItemLowerRight $lowerRight;

    /**
     * @param array{
     *   upperLeft: AnnotationSquigglyQuadPointsItemUpperLeft,
     *   upperRight: AnnotationSquigglyQuadPointsItemUpperRight,
     *   lowerLeft: AnnotationSquigglyQuadPointsItemLowerLeft,
     *   lowerRight: AnnotationSquigglyQuadPointsItemLowerRight,
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
