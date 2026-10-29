<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class FoldersCreate200Response extends JsonSerializableType
{
    /**
     * @var FoldersCreate200ResponseFolder $folder
     */
    #[JsonProperty('folder')]
    public FoldersCreate200ResponseFolder $folder;

    /**
     * @param array{
     *   folder: FoldersCreate200ResponseFolder,
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
