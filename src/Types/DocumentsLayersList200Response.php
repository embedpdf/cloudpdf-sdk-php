<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocumentsLayersList200Response extends JsonSerializableType
{
    /**
     * @var array<DocumentsLayersList200ResponseLayersItem> $layers
     */
    #[JsonProperty('layers'), ArrayType([DocumentsLayersList200ResponseLayersItem::class])]
    public array $layers;

    /**
     * @var ?string $nextCursor
     */
    #[JsonProperty('nextCursor')]
    public ?string $nextCursor;

    /**
     * @param array{
     *   layers: array<DocumentsLayersList200ResponseLayersItem>,
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
