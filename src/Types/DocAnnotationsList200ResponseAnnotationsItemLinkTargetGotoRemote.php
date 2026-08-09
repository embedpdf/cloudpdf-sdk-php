<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoRemote extends JsonSerializableType
{
    /**
     * @var string $file
     */
    #[JsonProperty('file')]
    public string $file;

    /**
     * @param array{
     *   file: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->file = $values['file'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
