<?php

namespace CloudPDF\Documents\Requests;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Documents\Types\ListDocumentsRequestState;

class ListDocumentsRequest extends JsonSerializableType
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
     * @var ?value-of<ListDocumentsRequestState> $state
     */
    public ?string $state;

    /**
     * @param array{
     *   limit?: ?int,
     *   cursor?: ?string,
     *   state?: ?value-of<ListDocumentsRequestState>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->limit = $values['limit'] ?? null;
        $this->cursor = $values['cursor'] ?? null;
        $this->state = $values['state'] ?? null;
    }
}
