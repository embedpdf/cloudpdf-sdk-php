<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class ChangeItemAnnotationsCopyRefMapItem extends JsonSerializableType
{
    /**
     * @var AnnotationRef $from
     */
    #[JsonProperty('from')]
    public AnnotationRef $from;

    /**
     * @var AnnotationRef $to
     */
    #[JsonProperty('to')]
    public AnnotationRef $to;

    /**
     * @param array{
     *   from: AnnotationRef,
     *   to: AnnotationRef,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->from = $values['from'];
        $this->to = $values['to'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
