<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class AnnotationPatchUnderlineQuadPointsItem extends JsonSerializableType
{
    /**
     * @var AnnotationPatchUnderlineQuadPointsItemUpperLeft $upperLeft
     */
    #[JsonProperty('upperLeft')]
    public AnnotationPatchUnderlineQuadPointsItemUpperLeft $upperLeft;

    /**
     * @var AnnotationPatchUnderlineQuadPointsItemUpperRight $upperRight
     */
    #[JsonProperty('upperRight')]
    public AnnotationPatchUnderlineQuadPointsItemUpperRight $upperRight;

    /**
     * @var AnnotationPatchUnderlineQuadPointsItemLowerLeft $lowerLeft
     */
    #[JsonProperty('lowerLeft')]
    public AnnotationPatchUnderlineQuadPointsItemLowerLeft $lowerLeft;

    /**
     * @var AnnotationPatchUnderlineQuadPointsItemLowerRight $lowerRight
     */
    #[JsonProperty('lowerRight')]
    public AnnotationPatchUnderlineQuadPointsItemLowerRight $lowerRight;

    /**
     * @param array{
     *   upperLeft: AnnotationPatchUnderlineQuadPointsItemUpperLeft,
     *   upperRight: AnnotationPatchUnderlineQuadPointsItemUpperRight,
     *   lowerLeft: AnnotationPatchUnderlineQuadPointsItemLowerLeft,
     *   lowerRight: AnnotationPatchUnderlineQuadPointsItemLowerRight,
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
