<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class FoldersUpdate200Response extends JsonSerializableType
{
    /**
     * @var FoldersUpdate200ResponseFolder $folder
     */
    #[JsonProperty('folder')]
    public FoldersUpdate200ResponseFolder $folder;

    /**
     * @param array{
     *   folder: FoldersUpdate200ResponseFolder,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->folder = $values['folder'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
