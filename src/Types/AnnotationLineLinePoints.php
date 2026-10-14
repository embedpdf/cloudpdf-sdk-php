<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class AnnotationLineLinePoints extends JsonSerializableType
{
    /**
     * @var AnnotationLineLinePointsStart $start
     */
    #[JsonProperty('start')]
    public AnnotationLineLinePointsStart $start;

    /**
     * @var AnnotationLineLinePointsEnd $end
     */
    #[JsonProperty('end')]
    public AnnotationLineLinePointsEnd $end;

    /**
     * @param array{
     *   start: AnnotationLineLinePointsStart,
     *   end: AnnotationLineLinePointsEnd,
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
