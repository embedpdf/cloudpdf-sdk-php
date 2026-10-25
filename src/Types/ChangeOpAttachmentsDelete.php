<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class ChangeOpAttachmentsDelete extends JsonSerializableType
{
    /**
     * @var AttachmentRef $ref
     */
    #[JsonProperty('ref')]
    public AttachmentRef $ref;

    /**
     * @param array{
     *   ref: AttachmentRef,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->ref = $values['ref'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
