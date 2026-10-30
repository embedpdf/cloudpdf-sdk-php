<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocumentsLayersList200ResponseLayersItem extends JsonSerializableType
{
    /**
     * @var string $docId
     */
    #[JsonProperty('docId')]
    public string $docId;

    /**
     * @var string $layerName
     */
    #[JsonProperty('layerName')]
    public string $layerName;

    /**
     * @var ?string $grantId
     */
    #[JsonProperty('grantId')]
    public ?string $grantId;

    /**
     * @var ?string $visitorId
     */
    #[JsonProperty('visitorId')]
    public ?string $visitorId;

    /**
     * @var ?float $storageSizeBytes
     */
    #[JsonProperty('storageSizeBytes')]
    public ?float $storageSizeBytes;

    /**
     * @var float $createdAt
     */
    #[JsonProperty('createdAt')]
    public float $createdAt;

    /**
     * @var float $updatedAt
     */
    #[JsonProperty('updatedAt')]
    public float $updatedAt;

    /**
     * @var ?float $lastSeenAt
     */
    #[JsonProperty('lastSeenAt')]
    public ?float $lastSeenAt;

    /**
     * @param array{
     *   docId: string,
     *   layerName: string,
     *   createdAt: float,
     *   updatedAt: float,
     *   grantId?: ?string,
     *   visitorId?: ?string,
     *   storageSizeBytes?: ?float,
     *   lastSeenAt?: ?float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->docId = $values['docId'];
        $this->layerName = $values['layerName'];
        $this->grantId = $values['grantId'] ?? null;
        $this->visitorId = $values['visitorId'] ?? null;
        $this->storageSizeBytes = $values['storageSizeBytes'] ?? null;
        $this->createdAt = $values['createdAt'];
        $this->updatedAt = $values['updatedAt'];
        $this->lastSeenAt = $values['lastSeenAt'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
