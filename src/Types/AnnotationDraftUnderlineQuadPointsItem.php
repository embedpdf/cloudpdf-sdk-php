<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class AnnotationDraftUnderlineQuadPointsItem extends JsonSerializableType
{
    /**
     * @var AnnotationDraftUnderlineQuadPointsItemUpperLeft $upperLeft
     */
    #[JsonProperty('upperLeft')]
    public AnnotationDraftUnderlineQuadPointsItemUpperLeft $upperLeft;

    /**
     * @var AnnotationDraftUnderlineQuadPointsItemUpperRight $upperRight
     */
    #[JsonProperty('upperRight')]
    public AnnotationDraftUnderlineQuadPointsItemUpperRight $upperRight;

    /**
     * @var AnnotationDraftUnderlineQuadPointsItemLowerLeft $lowerLeft
     */
    #[JsonProperty('lowerLeft')]
    public AnnotationDraftUnderlineQuadPointsItemLowerLeft $lowerLeft;

    /**
     * @var AnnotationDraftUnderlineQuadPointsItemLowerRight $lowerRight
     */
    #[JsonProperty('lowerRight')]
    public AnnotationDraftUnderlineQuadPointsItemLowerRight $lowerRight;

    /**
     * @param array{
     *   upperLeft: AnnotationDraftUnderlineQuadPointsItemUpperLeft,
     *   upperRight: AnnotationDraftUnderlineQuadPointsItemUpperRight,
     *   lowerLeft: AnnotationDraftUnderlineQuadPointsItemLowerLeft,
     *   lowerRight: AnnotationDraftUnderlineQuadPointsItemLowerRight,
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
