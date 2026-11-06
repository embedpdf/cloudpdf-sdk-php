<?php

namespace CloudPDF\Folders\Requests;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class FoldersMoveIntoRequest extends JsonSerializableType
{
    /**
     * @var ?array<string> $docIds
     */
    #[JsonProperty('docIds'), ArrayType(['string'])]
    public ?array $docIds;

    /**
     * @var ?array<string> $folderIds
     */
    #[JsonProperty('folderIds'), ArrayType(['string'])]
    public ?array $folderIds;

    /**
     * @param array{
     *   docIds?: ?array<string>,
     *   folderIds?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->docIds = $values['docIds'] ?? null;
        $this->folderIds = $values['folderIds'] ?? null;
    }
}
