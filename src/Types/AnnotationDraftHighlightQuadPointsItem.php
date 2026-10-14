<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class AnnotationDraftHighlightQuadPointsItem extends JsonSerializableType
{
    /**
     * @var AnnotationDraftHighlightQuadPointsItemUpperLeft $upperLeft
     */
    #[JsonProperty('upperLeft')]
    public AnnotationDraftHighlightQuadPointsItemUpperLeft $upperLeft;

    /**
     * @var AnnotationDraftHighlightQuadPointsItemUpperRight $upperRight
     */
    #[JsonProperty('upperRight')]
    public AnnotationDraftHighlightQuadPointsItemUpperRight $upperRight;

    /**
     * @var AnnotationDraftHighlightQuadPointsItemLowerLeft $lowerLeft
     */
    #[JsonProperty('lowerLeft')]
    public AnnotationDraftHighlightQuadPointsItemLowerLeft $lowerLeft;

    /**
     * @var AnnotationDraftHighlightQuadPointsItemLowerRight $lowerRight
     */
    #[JsonProperty('lowerRight')]
    public AnnotationDraftHighlightQuadPointsItemLowerRight $lowerRight;

    /**
     * @param array{
     *   upperLeft: AnnotationDraftHighlightQuadPointsItemUpperLeft,
     *   upperRight: AnnotationDraftHighlightQuadPointsItemUpperRight,
     *   lowerLeft: AnnotationDraftHighlightQuadPointsItemLowerLeft,
     *   lowerRight: AnnotationDraftHighlightQuadPointsItemLowerRight,
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
