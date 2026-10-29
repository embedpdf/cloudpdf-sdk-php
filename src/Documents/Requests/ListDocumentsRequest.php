<?php

namespace CloudPDF\Documents\Requests;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Documents\Types\ListDocumentsRequestState;
use CloudPDF\Documents\Types\ListDocumentsRequestSort;
use CloudPDF\Documents\Types\ListDocumentsRequestOrder;

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
     * @var ?value-of<ListDocumentsRequestState> $state Only documents in this state. Without it, every state except deleting.
     */
    public ?string $state;

    /**
     * @var ?string $q Only documents whose name contains this text, ignoring case.
     */
    public ?string $q;

    /**
     * @var ?string $folderId Only documents directly in this folder (root: the top level). Without it, documents in every folder.
     */
    public ?string $folderId;

    /**
     * @var ?value-of<ListDocumentsRequestSort> $sort createdAt (default), name (ignoring case), or size (stored bytes; 0 while pending).
     */
    public ?string $sort;

    /**
     * @var ?value-of<ListDocumentsRequestOrder> $order Defaults to the reading order of the sort: A to Z for name, newest and largest first otherwise.
     */
    public ?string $order;

    /**
     * @param array{
     *   limit?: ?int,
     *   cursor?: ?string,
     *   state?: ?value-of<ListDocumentsRequestState>,
     *   q?: ?string,
     *   folderId?: ?string,
     *   sort?: ?value-of<ListDocumentsRequestSort>,
     *   order?: ?value-of<ListDocumentsRequestOrder>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->limit = $values['limit'] ?? null;
        $this->cursor = $values['cursor'] ?? null;
        $this->state = $values['state'] ?? null;
        $this->q = $values['q'] ?? null;
        $this->folderId = $values['folderId'] ?? null;
        $this->sort = $values['sort'] ?? null;
        $this->order = $values['order'] ?? null;
    }
}
