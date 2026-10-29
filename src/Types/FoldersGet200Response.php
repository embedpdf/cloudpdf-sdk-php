<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class FoldersGet200Response extends JsonSerializableType
{
    /**
     * @var FoldersGet200ResponseFolder $folder
     */
    #[JsonProperty('folder')]
    public FoldersGet200ResponseFolder $folder;

    /**
     * @var array<FoldersGet200ResponsePathItem> $path The folders above this one, from the top level down. Neither root nor the folder itself.
     */
    #[JsonProperty('path'), ArrayType([FoldersGet200ResponsePathItem::class])]
    public array $path;

    /**
     * @param array{
     *   folder: FoldersGet200ResponseFolder,
     *   path: array<FoldersGet200ResponsePathItem>,
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
