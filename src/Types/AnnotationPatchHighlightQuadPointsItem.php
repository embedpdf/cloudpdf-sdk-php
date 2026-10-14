<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class AnnotationPatchHighlightQuadPointsItem extends JsonSerializableType
{
    /**
     * @var AnnotationPatchHighlightQuadPointsItemUpperLeft $upperLeft
     */
    #[JsonProperty('upperLeft')]
    public AnnotationPatchHighlightQuadPointsItemUpperLeft $upperLeft;

    /**
     * @var AnnotationPatchHighlightQuadPointsItemUpperRight $upperRight
     */
    #[JsonProperty('upperRight')]
    public AnnotationPatchHighlightQuadPointsItemUpperRight $upperRight;

    /**
     * @var AnnotationPatchHighlightQuadPointsItemLowerLeft $lowerLeft
     */
    #[JsonProperty('lowerLeft')]
    public AnnotationPatchHighlightQuadPointsItemLowerLeft $lowerLeft;

    /**
     * @var AnnotationPatchHighlightQuadPointsItemLowerRight $lowerRight
     */
    #[JsonProperty('lowerRight')]
    public AnnotationPatchHighlightQuadPointsItemLowerRight $lowerRight;

    /**
     * @param array{
     *   upperLeft: AnnotationPatchHighlightQuadPointsItemUpperLeft,
     *   upperRight: AnnotationPatchHighlightQuadPointsItemUpperRight,
     *   lowerLeft: AnnotationPatchHighlightQuadPointsItemLowerLeft,
     *   lowerRight: AnnotationPatchHighlightQuadPointsItemLowerRight,
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
