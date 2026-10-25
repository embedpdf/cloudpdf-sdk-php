<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class ChangeItemAttachmentsRestore extends JsonSerializableType
{
    /**
     * @var Attachment $attachment
     */
    #[JsonProperty('attachment')]
    public Attachment $attachment;

    /**
     * @var AttachmentMutationMeta $meta
     */
    #[JsonProperty('meta')]
    public AttachmentMutationMeta $meta;

    /**
     * @param array{
     *   attachment: Attachment,
     *   meta: AttachmentMutationMeta,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->attachment = $values['attachment'];
        $this->meta = $values['meta'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
