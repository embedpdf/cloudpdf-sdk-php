<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class AnnotationInkReply extends JsonSerializableType
{
    /**
     * @var AnnotationRef $to
     */
    #[JsonProperty('to')]
    public AnnotationRef $to;

    /**
     * @var value-of<AnnotationInkReplyType> $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @param array{
     *   to: AnnotationRef,
     *   type: value-of<AnnotationInkReplyType>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->to = $values['to'];
        $this->type = $values['type'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
