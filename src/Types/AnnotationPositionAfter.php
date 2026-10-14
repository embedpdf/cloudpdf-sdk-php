<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class AnnotationPositionAfter extends JsonSerializableType
{
    /**
     * @var ?AnnotationRef $before
     */
    #[JsonProperty('before')]
    public ?AnnotationRef $before;

    /**
     * @var ?AnnotationRef $after
     */
    #[JsonProperty('after')]
    public ?AnnotationRef $after;

    /**
     * @param array{
     *   before?: ?AnnotationRef,
     *   after?: ?AnnotationRef,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->before = $values['before'] ?? null;
        $this->after = $values['after'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
