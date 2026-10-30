<?php

namespace CloudPDF\Grants\Requests;

use CloudPDF\Core\Json\JsonSerializableType;

class ListGrantsRequest extends JsonSerializableType
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
     * @var ?string $docId
     */
    public ?string $docId;

    /**
     * @var ?bool $archived
     */
    public ?bool $archived;

    /**
     * @param array{
     *   limit?: ?int,
     *   cursor?: ?string,
     *   docId?: ?string,
     *   archived?: ?bool,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->limit = $values['limit'] ?? null;
        $this->cursor = $values['cursor'] ?? null;
        $this->docId = $values['docId'] ?? null;
        $this->archived = $values['archived'] ?? null;
    }
}
