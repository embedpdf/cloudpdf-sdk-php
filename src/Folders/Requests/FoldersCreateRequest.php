<?php

namespace CloudPDF\Folders\Requests;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class FoldersCreateRequest extends JsonSerializableType
{
    /**
     * @var string $name What people call the folder: 1 to 255 characters, no control characters, no leading or trailing whitespace, and unique among the folder's siblings, ignoring case.
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $parentId A folder id, or root for the top level.
     */
    #[JsonProperty('parentId')]
    public ?string $parentId;

    /**
     * @param array{
     *   name: string,
     *   parentId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->parentId = $values['parentId'] ?? null;
    }
}
