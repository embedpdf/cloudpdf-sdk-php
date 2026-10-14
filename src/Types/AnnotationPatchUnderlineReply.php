<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class AnnotationPatchUnderlineReply extends JsonSerializableType
{
    /**
     * @var AnnotationRef $to
     */
    #[JsonProperty('to')]
    public AnnotationRef $to;

    /**
     * @var ?value-of<AnnotationPatchUnderlineReplyType> $type
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @param array{
     *   to: AnnotationRef,
     *   type?: ?value-of<AnnotationPatchUnderlineReplyType>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->to = $values['to'];
        $this->type = $values['type'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
