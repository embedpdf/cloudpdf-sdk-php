<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class AnnotationDraftSquigglyQuadPointsItem extends JsonSerializableType
{
    /**
     * @var AnnotationDraftSquigglyQuadPointsItemUpperLeft $upperLeft
     */
    #[JsonProperty('upperLeft')]
    public AnnotationDraftSquigglyQuadPointsItemUpperLeft $upperLeft;

    /**
     * @var AnnotationDraftSquigglyQuadPointsItemUpperRight $upperRight
     */
    #[JsonProperty('upperRight')]
    public AnnotationDraftSquigglyQuadPointsItemUpperRight $upperRight;

    /**
     * @var AnnotationDraftSquigglyQuadPointsItemLowerLeft $lowerLeft
     */
    #[JsonProperty('lowerLeft')]
    public AnnotationDraftSquigglyQuadPointsItemLowerLeft $lowerLeft;

    /**
     * @var AnnotationDraftSquigglyQuadPointsItemLowerRight $lowerRight
     */
    #[JsonProperty('lowerRight')]
    public AnnotationDraftSquigglyQuadPointsItemLowerRight $lowerRight;

    /**
     * @param array{
     *   upperLeft: AnnotationDraftSquigglyQuadPointsItemUpperLeft,
     *   upperRight: AnnotationDraftSquigglyQuadPointsItemUpperRight,
     *   lowerLeft: AnnotationDraftSquigglyQuadPointsItemLowerLeft,
     *   lowerRight: AnnotationDraftSquigglyQuadPointsItemLowerRight,
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
