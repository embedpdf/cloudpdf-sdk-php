<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class AttachmentList extends JsonSerializableType
{
    /**
     * @var array<Attachment> $attachments
     */
    #[JsonProperty('attachments'), ArrayType([Attachment::class])]
    public array $attachments;

    /**
     * @param array{
     *   attachments: array<Attachment>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->attachments = $values['attachments'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
