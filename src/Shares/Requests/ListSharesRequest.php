<?php

namespace CloudPDF\Shares\Requests;

use CloudPDF\Core\Json\JsonSerializableType;

class ListSharesRequest extends JsonSerializableType
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
     * @param array{
     *   limit?: ?int,
     *   cursor?: ?string,
     *   docId?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->limit = $values['limit'] ?? null;
        $this->cursor = $values['cursor'] ?? null;
        $this->docId = $values['docId'] ?? null;
    }
}
