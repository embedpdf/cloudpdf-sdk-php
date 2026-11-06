<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class FoldersCreateResponse extends JsonSerializableType
{
    /**
     * @var FoldersCreateResponseFolder $folder
     */
    #[JsonProperty('folder')]
    public FoldersCreateResponseFolder $folder;

    /**
     * @param array{
     *   folder: FoldersCreateResponseFolder,
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
