<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class ChangeOpAttachmentsCreate extends JsonSerializableType
{
    /**
     * @var AttachmentFileBase $file
     */
    #[JsonProperty('file')]
    public AttachmentFileBase $file;

    /**
     * @var ChangeOpAttachmentsCreateResources $resources
     */
    #[JsonProperty('resources')]
    public ChangeOpAttachmentsCreateResources $resources;

    /**
     * @param array{
     *   file: AttachmentFileBase,
     *   resources: ChangeOpAttachmentsCreateResources,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->file = $values['file'];
        $this->resources = $values['resources'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
