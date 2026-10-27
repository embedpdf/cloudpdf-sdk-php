<?php

namespace CloudPDF\Documents\Layers\Requests;

use CloudPDF\Core\Json\JsonSerializableType;

class ListLayersRequest extends JsonSerializableType
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
     * @var ?string $shareId
     */
    public ?string $shareId;

    /**
     * @param array{
     *   limit?: ?int,
     *   cursor?: ?string,
     *   shareId?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->limit = $values['limit'] ?? null;
        $this->cursor = $values['cursor'] ?? null;
        $this->shareId = $values['shareId'] ?? null;
    }
}
