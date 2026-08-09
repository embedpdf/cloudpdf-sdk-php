<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocumentsList200Response extends JsonSerializableType
{
    /**
     * @var array<DocumentsList200ResponseDocumentsItem> $documents
     */
    #[JsonProperty('documents'), ArrayType([DocumentsList200ResponseDocumentsItem::class])]
    public array $documents;

    /**
     * @var ?string $nextCursor
     */
    #[JsonProperty('nextCursor')]
    public ?string $nextCursor;

    /**
     * @param array{
     *   documents: array<DocumentsList200ResponseDocumentsItem>,
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
