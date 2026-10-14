<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class AnnotationDraftLineLinePoints extends JsonSerializableType
{
    /**
     * @var AnnotationDraftLineLinePointsStart $start
     */
    #[JsonProperty('start')]
    public AnnotationDraftLineLinePointsStart $start;

    /**
     * @var AnnotationDraftLineLinePointsEnd $end
     */
    #[JsonProperty('end')]
    public AnnotationDraftLineLinePointsEnd $end;

    /**
     * @param array{
     *   start: AnnotationDraftLineLinePointsStart,
     *   end: AnnotationDraftLineLinePointsEnd,
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
