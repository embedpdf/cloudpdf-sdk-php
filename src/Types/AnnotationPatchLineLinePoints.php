<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class AnnotationPatchLineLinePoints extends JsonSerializableType
{
    /**
     * @var AnnotationPatchLineLinePointsStart $start
     */
    #[JsonProperty('start')]
    public AnnotationPatchLineLinePointsStart $start;

    /**
     * @var AnnotationPatchLineLinePointsEnd $end
     */
    #[JsonProperty('end')]
    public AnnotationPatchLineLinePointsEnd $end;

    /**
     * @param array{
     *   start: AnnotationPatchLineLinePointsStart,
     *   end: AnnotationPatchLineLinePointsEnd,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->start = $values['start'];
        $this->end = $values['end'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
