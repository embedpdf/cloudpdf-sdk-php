<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;
use Cloudpdf\Core\Types\ArrayType;

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
