<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class AnnotationDraftPolylineLineEndings extends JsonSerializableType
{
    /**
     * @var value-of<AnnotationDraftPolylineLineEndingsStart> $start
     */
    #[JsonProperty('start')]
    public string $start;

    /**
     * @var value-of<AnnotationDraftPolylineLineEndingsEnd> $end
     */
    #[JsonProperty('end')]
    public string $end;

    /**
     * @param array{
     *   start: value-of<AnnotationDraftPolylineLineEndingsStart>,
     *   end: value-of<AnnotationDraftPolylineLineEndingsEnd>,
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
