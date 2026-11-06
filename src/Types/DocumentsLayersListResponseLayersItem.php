<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use DateTime;
use CloudPDF\Core\Types\Date;

class DocumentsLayersListResponseLayersItem extends JsonSerializableType
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
     * @var ?int $sizeBytes
     */
    #[JsonProperty('sizeBytes')]
    public ?int $sizeBytes;

    /**
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var DateTime $updatedAt
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $updatedAt;

    /**
     * @var ?DateTime $lastSeenAt
     */
    #[JsonProperty('lastSeenAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $lastSeenAt;

    /**
     * @param array{
     *   docId: string,
     *   layerName: string,
     *   createdAt: DateTime,
     *   updatedAt: DateTime,
     *   grantId?: ?string,
     *   visitorId?: ?string,
     *   sizeBytes?: ?int,
     *   lastSeenAt?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->docId = $values['docId'];
        $this->layerName = $values['layerName'];
        $this->grantId = $values['grantId'] ?? null;
        $this->visitorId = $values['visitorId'] ?? null;
        $this->sizeBytes = $values['sizeBytes'] ?? null;
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
