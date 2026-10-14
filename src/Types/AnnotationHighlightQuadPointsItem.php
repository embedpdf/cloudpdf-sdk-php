<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class AnnotationHighlightQuadPointsItem extends JsonSerializableType
{
    /**
     * @var AnnotationHighlightQuadPointsItemUpperLeft $upperLeft
     */
    #[JsonProperty('upperLeft')]
    public AnnotationHighlightQuadPointsItemUpperLeft $upperLeft;

    /**
     * @var AnnotationHighlightQuadPointsItemUpperRight $upperRight
     */
    #[JsonProperty('upperRight')]
    public AnnotationHighlightQuadPointsItemUpperRight $upperRight;

    /**
     * @var AnnotationHighlightQuadPointsItemLowerLeft $lowerLeft
     */
    #[JsonProperty('lowerLeft')]
    public AnnotationHighlightQuadPointsItemLowerLeft $lowerLeft;

    /**
     * @var AnnotationHighlightQuadPointsItemLowerRight $lowerRight
     */
    #[JsonProperty('lowerRight')]
    public AnnotationHighlightQuadPointsItemLowerRight $lowerRight;

    /**
     * @param array{
     *   upperLeft: AnnotationHighlightQuadPointsItemUpperLeft,
     *   upperRight: AnnotationHighlightQuadPointsItemUpperRight,
     *   lowerLeft: AnnotationHighlightQuadPointsItemLowerLeft,
     *   lowerRight: AnnotationHighlightQuadPointsItemLowerRight,
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
