<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class AnnotationPatchRedactQuadPointsItem extends JsonSerializableType
{
    /**
     * @var AnnotationPatchRedactQuadPointsItemUpperLeft $upperLeft
     */
    #[JsonProperty('upperLeft')]
    public AnnotationPatchRedactQuadPointsItemUpperLeft $upperLeft;

    /**
     * @var AnnotationPatchRedactQuadPointsItemUpperRight $upperRight
     */
    #[JsonProperty('upperRight')]
    public AnnotationPatchRedactQuadPointsItemUpperRight $upperRight;

    /**
     * @var AnnotationPatchRedactQuadPointsItemLowerLeft $lowerLeft
     */
    #[JsonProperty('lowerLeft')]
    public AnnotationPatchRedactQuadPointsItemLowerLeft $lowerLeft;

    /**
     * @var AnnotationPatchRedactQuadPointsItemLowerRight $lowerRight
     */
    #[JsonProperty('lowerRight')]
    public AnnotationPatchRedactQuadPointsItemLowerRight $lowerRight;

    /**
     * @param array{
     *   upperLeft: AnnotationPatchRedactQuadPointsItemUpperLeft,
     *   upperRight: AnnotationPatchRedactQuadPointsItemUpperRight,
     *   lowerLeft: AnnotationPatchRedactQuadPointsItemLowerLeft,
     *   lowerRight: AnnotationPatchRedactQuadPointsItemLowerRight,
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
