<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class AnnotationDraftLineLineEndings extends JsonSerializableType
{
    /**
     * @var value-of<AnnotationDraftLineLineEndingsStart> $start
     */
    #[JsonProperty('start')]
    public string $start;

    /**
     * @var value-of<AnnotationDraftLineLineEndingsEnd> $end
     */
    #[JsonProperty('end')]
    public string $end;

    /**
     * @param array{
     *   start: value-of<AnnotationDraftLineLineEndingsStart>,
     *   end: value-of<AnnotationDraftLineLineEndingsEnd>,
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
