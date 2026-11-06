<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocumentsLayersListResponse extends JsonSerializableType
{
    /**
     * @var array<DocumentsLayersListResponseLayersItem> $layers
     */
    #[JsonProperty('layers'), ArrayType([DocumentsLayersListResponseLayersItem::class])]
    public array $layers;

    /**
     * @var ?string $nextCursor
     */
    #[JsonProperty('nextCursor')]
    public ?string $nextCursor;

    /**
     * @param array{
     *   layers: array<DocumentsLayersListResponseLayersItem>,
     *   nextCursor?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->layers = $values['layers'];
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
