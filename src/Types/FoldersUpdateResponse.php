<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class FoldersUpdateResponse extends JsonSerializableType
{
    /**
     * @var FoldersUpdateResponseFolder $folder
     */
    #[JsonProperty('folder')]
    public FoldersUpdateResponseFolder $folder;

    /**
     * @param array{
     *   folder: FoldersUpdateResponseFolder,
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
