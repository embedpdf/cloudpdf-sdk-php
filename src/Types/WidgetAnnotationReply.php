<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class WidgetAnnotationReply extends JsonSerializableType
{
    /**
     * @var AnnotationRef $to
     */
    #[JsonProperty('to')]
    public AnnotationRef $to;

    /**
     * @var value-of<WidgetAnnotationReplyType> $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @param array{
     *   to: AnnotationRef,
     *   type: value-of<WidgetAnnotationReplyType>,
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
