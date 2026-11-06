<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class GrantsVisitorsListResponseVisitorsItemLayer extends JsonSerializableType
{
    /**
     * @var string $layerName
     */
    #[JsonProperty('layerName')]
    public string $layerName;

    /**
     * @var ?int $sizeBytes
     */
    #[JsonProperty('sizeBytes')]
    public ?int $sizeBytes;

    /**
     * @param array{
     *   layerName: string,
     *   sizeBytes?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->layerName = $values['layerName'];
        $this->sizeBytes = $values['sizeBytes'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
