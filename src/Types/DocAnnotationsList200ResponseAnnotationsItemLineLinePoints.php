<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocAnnotationsList200ResponseAnnotationsItemLineLinePoints extends JsonSerializableType
{
    /**
     * @var DocAnnotationsList200ResponseAnnotationsItemLineLinePointsStart $start
     */
    #[JsonProperty('start')]
    public DocAnnotationsList200ResponseAnnotationsItemLineLinePointsStart $start;

    /**
     * @var DocAnnotationsList200ResponseAnnotationsItemLineLinePointsEnd $end
     */
    #[JsonProperty('end')]
    public DocAnnotationsList200ResponseAnnotationsItemLineLinePointsEnd $end;

    /**
     * @param array{
     *   start: DocAnnotationsList200ResponseAnnotationsItemLineLinePointsStart,
     *   end: DocAnnotationsList200ResponseAnnotationsItemLineLinePointsEnd,
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
