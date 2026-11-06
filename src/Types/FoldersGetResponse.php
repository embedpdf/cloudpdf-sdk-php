<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class FoldersGetResponse extends JsonSerializableType
{
    /**
     * @var FoldersGetResponseFolder $folder
     */
    #[JsonProperty('folder')]
    public FoldersGetResponseFolder $folder;

    /**
     * @var array<FoldersGetResponsePathItem> $path The folders above this one, from the top level down. Neither root nor the folder itself.
     */
    #[JsonProperty('path'), ArrayType([FoldersGetResponsePathItem::class])]
    public array $path;

    /**
     * @param array{
     *   folder: FoldersGetResponseFolder,
     *   path: array<FoldersGetResponsePathItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->folder = $values['folder'];
        $this->path = $values['path'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
