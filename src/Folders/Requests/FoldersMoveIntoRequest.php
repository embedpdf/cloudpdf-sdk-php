<?php

namespace CloudPDF\Folders\Requests;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class FoldersMoveIntoRequest extends JsonSerializableType
{
    /**
     * @var ?array<string> $documentIds
     */
    #[JsonProperty('documentIds'), ArrayType(['string'])]
    public ?array $documentIds;

    /**
     * @var ?array<string> $folderIds
     */
    #[JsonProperty('folderIds'), ArrayType(['string'])]
    public ?array $folderIds;

    /**
     * @param array{
     *   documentIds?: ?array<string>,
     *   folderIds?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->documentIds = $values['documentIds'] ?? null;
        $this->folderIds = $values['folderIds'] ?? null;
    }
}
