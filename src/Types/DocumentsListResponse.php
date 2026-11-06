<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocumentsListResponse extends JsonSerializableType
{
    /**
     * @var array<DocumentsListResponseDocumentsItem> $documents
     */
    #[JsonProperty('documents'), ArrayType([DocumentsListResponseDocumentsItem::class])]
    public array $documents;

    /**
     * @var ?string $nextCursor
     */
    #[JsonProperty('nextCursor')]
    public ?string $nextCursor;

    /**
     * @param array{
     *   documents: array<DocumentsListResponseDocumentsItem>,
     *   nextCursor?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->documents = $values['documents'];
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
