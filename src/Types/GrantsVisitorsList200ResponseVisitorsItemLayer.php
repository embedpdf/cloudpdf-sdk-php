<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class GrantsVisitorsList200ResponseVisitorsItemLayer extends JsonSerializableType
{
    /**
     * @var string $layerName
     */
    #[JsonProperty('layerName')]
    public string $layerName;

    /**
     * @var ?float $storageSizeBytes
     */
    #[JsonProperty('storageSizeBytes')]
    public ?float $storageSizeBytes;

    /**
     * @param array{
     *   layerName: string,
     *   storageSizeBytes?: ?float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->layerName = $values['layerName'];
        $this->storageSizeBytes = $values['storageSizeBytes'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
