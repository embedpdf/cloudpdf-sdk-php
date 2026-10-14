<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class AnnotationUnderlineQuadPointsItem extends JsonSerializableType
{
    /**
     * @var AnnotationUnderlineQuadPointsItemUpperLeft $upperLeft
     */
    #[JsonProperty('upperLeft')]
    public AnnotationUnderlineQuadPointsItemUpperLeft $upperLeft;

    /**
     * @var AnnotationUnderlineQuadPointsItemUpperRight $upperRight
     */
    #[JsonProperty('upperRight')]
    public AnnotationUnderlineQuadPointsItemUpperRight $upperRight;

    /**
     * @var AnnotationUnderlineQuadPointsItemLowerLeft $lowerLeft
     */
    #[JsonProperty('lowerLeft')]
    public AnnotationUnderlineQuadPointsItemLowerLeft $lowerLeft;

    /**
     * @var AnnotationUnderlineQuadPointsItemLowerRight $lowerRight
     */
    #[JsonProperty('lowerRight')]
    public AnnotationUnderlineQuadPointsItemLowerRight $lowerRight;

    /**
     * @param array{
     *   upperLeft: AnnotationUnderlineQuadPointsItemUpperLeft,
     *   upperRight: AnnotationUnderlineQuadPointsItemUpperRight,
     *   lowerLeft: AnnotationUnderlineQuadPointsItemLowerLeft,
     *   lowerRight: AnnotationUnderlineQuadPointsItemLowerRight,
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
