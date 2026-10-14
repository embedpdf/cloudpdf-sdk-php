<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class AnnotationRedactQuadPointsItem extends JsonSerializableType
{
    /**
     * @var AnnotationRedactQuadPointsItemUpperLeft $upperLeft
     */
    #[JsonProperty('upperLeft')]
    public AnnotationRedactQuadPointsItemUpperLeft $upperLeft;

    /**
     * @var AnnotationRedactQuadPointsItemUpperRight $upperRight
     */
    #[JsonProperty('upperRight')]
    public AnnotationRedactQuadPointsItemUpperRight $upperRight;

    /**
     * @var AnnotationRedactQuadPointsItemLowerLeft $lowerLeft
     */
    #[JsonProperty('lowerLeft')]
    public AnnotationRedactQuadPointsItemLowerLeft $lowerLeft;

    /**
     * @var AnnotationRedactQuadPointsItemLowerRight $lowerRight
     */
    #[JsonProperty('lowerRight')]
    public AnnotationRedactQuadPointsItemLowerRight $lowerRight;

    /**
     * @param array{
     *   upperLeft: AnnotationRedactQuadPointsItemUpperLeft,
     *   upperRight: AnnotationRedactQuadPointsItemUpperRight,
     *   lowerLeft: AnnotationRedactQuadPointsItemLowerLeft,
     *   lowerRight: AnnotationRedactQuadPointsItemLowerRight,
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
