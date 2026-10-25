<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class ChangeItemAttachmentsDelete extends JsonSerializableType
{
    /**
     * @var AttachmentMutationMeta $meta
     */
    #[JsonProperty('meta')]
    public AttachmentMutationMeta $meta;

    /**
     * @param array{
     *   meta: AttachmentMutationMeta,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
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
