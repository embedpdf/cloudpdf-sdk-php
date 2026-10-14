<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class AnnotationDraftStrikeoutQuadPointsItem extends JsonSerializableType
{
    /**
     * @var AnnotationDraftStrikeoutQuadPointsItemUpperLeft $upperLeft
     */
    #[JsonProperty('upperLeft')]
    public AnnotationDraftStrikeoutQuadPointsItemUpperLeft $upperLeft;

    /**
     * @var AnnotationDraftStrikeoutQuadPointsItemUpperRight $upperRight
     */
    #[JsonProperty('upperRight')]
    public AnnotationDraftStrikeoutQuadPointsItemUpperRight $upperRight;

    /**
     * @var AnnotationDraftStrikeoutQuadPointsItemLowerLeft $lowerLeft
     */
    #[JsonProperty('lowerLeft')]
    public AnnotationDraftStrikeoutQuadPointsItemLowerLeft $lowerLeft;

    /**
     * @var AnnotationDraftStrikeoutQuadPointsItemLowerRight $lowerRight
     */
    #[JsonProperty('lowerRight')]
    public AnnotationDraftStrikeoutQuadPointsItemLowerRight $lowerRight;

    /**
     * @param array{
     *   upperLeft: AnnotationDraftStrikeoutQuadPointsItemUpperLeft,
     *   upperRight: AnnotationDraftStrikeoutQuadPointsItemUpperRight,
     *   lowerLeft: AnnotationDraftStrikeoutQuadPointsItemLowerLeft,
     *   lowerRight: AnnotationDraftStrikeoutQuadPointsItemLowerRight,
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
