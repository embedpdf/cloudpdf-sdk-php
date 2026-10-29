<?php

namespace CloudPDF\Folders\Requests;

use CloudPDF\Core\Json\JsonSerializableType;

class ListFoldersRequest extends JsonSerializableType
{
    /**
     * @var ?int $limit
     */
    public ?int $limit;

    /**
     * @var ?string $cursor
     */
    public ?string $cursor;

    /**
     * @var ?string $parentId Only the folders directly in this folder (root: the top level). Without it, every folder.
     */
    public ?string $parentId;

    /**
     * @param array{
     *   limit?: ?int,
     *   cursor?: ?string,
     *   parentId?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->limit = $values['limit'] ?? null;
        $this->cursor = $values['cursor'] ?? null;
        $this->parentId = $values['parentId'] ?? null;
    }
}
