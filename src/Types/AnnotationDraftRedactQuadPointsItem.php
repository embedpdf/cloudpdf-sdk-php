<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class AnnotationDraftRedactQuadPointsItem extends JsonSerializableType
{
    /**
     * @var AnnotationDraftRedactQuadPointsItemUpperLeft $upperLeft
     */
    #[JsonProperty('upperLeft')]
    public AnnotationDraftRedactQuadPointsItemUpperLeft $upperLeft;

    /**
     * @var AnnotationDraftRedactQuadPointsItemUpperRight $upperRight
     */
    #[JsonProperty('upperRight')]
    public AnnotationDraftRedactQuadPointsItemUpperRight $upperRight;

    /**
     * @var AnnotationDraftRedactQuadPointsItemLowerLeft $lowerLeft
     */
    #[JsonProperty('lowerLeft')]
    public AnnotationDraftRedactQuadPointsItemLowerLeft $lowerLeft;

    /**
     * @var AnnotationDraftRedactQuadPointsItemLowerRight $lowerRight
     */
    #[JsonProperty('lowerRight')]
    public AnnotationDraftRedactQuadPointsItemLowerRight $lowerRight;

    /**
     * @param array{
     *   upperLeft: AnnotationDraftRedactQuadPointsItemUpperLeft,
     *   upperRight: AnnotationDraftRedactQuadPointsItemUpperRight,
     *   lowerLeft: AnnotationDraftRedactQuadPointsItemLowerLeft,
     *   lowerRight: AnnotationDraftRedactQuadPointsItemLowerRight,
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
