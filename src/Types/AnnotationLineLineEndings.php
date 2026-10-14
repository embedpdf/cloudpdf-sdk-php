<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class AnnotationLineLineEndings extends JsonSerializableType
{
    /**
     * @var value-of<AnnotationLineLineEndingsStart> $start
     */
    #[JsonProperty('start')]
    public string $start;

    /**
     * @var value-of<AnnotationLineLineEndingsEnd> $end
     */
    #[JsonProperty('end')]
    public string $end;

    /**
     * @param array{
     *   start: value-of<AnnotationLineLineEndingsStart>,
     *   end: value-of<AnnotationLineLineEndingsEnd>,
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
