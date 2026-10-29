<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class FoldersList200Response extends JsonSerializableType
{
    /**
     * @var array<FoldersList200ResponseFoldersItem> $folders
     */
    #[JsonProperty('folders'), ArrayType([FoldersList200ResponseFoldersItem::class])]
    public array $folders;

    /**
     * @var ?string $nextCursor
     */
    #[JsonProperty('nextCursor')]
    public ?string $nextCursor;

    /**
     * @param array{
     *   folders: array<FoldersList200ResponseFoldersItem>,
     *   nextCursor?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->folders = $values['folders'];
        $this->nextCursor = $values['nextCursor'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
