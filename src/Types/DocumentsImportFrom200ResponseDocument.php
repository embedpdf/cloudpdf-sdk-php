<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;
use DateTime;
use CloudPDF\Core\Types\Date;

class DocumentsImportFrom200ResponseDocument extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $tenantId
     */
    #[JsonProperty('tenantId')]
    public string $tenantId;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var string $folderId The folder the document is in, or root.
     */
    #[JsonProperty('folderId')]
    public string $folderId;

    /**
     * @var value-of<DocumentsImportFrom200ResponseDocumentState> $state
     */
    #[JsonProperty('state')]
    public string $state;

    /**
     * @var ?string $baseSha256
     */
    #[JsonProperty('baseSha256')]
    public ?string $baseSha256;

    /**
     * @var ?int $sizeBytes
     */
    #[JsonProperty('sizeBytes')]
    public ?int $sizeBytes;

    /**
     * @var ?array<string, mixed> $metadata
     */
    #[JsonProperty('metadata'), ArrayType(['string' => 'mixed'])]
    public ?array $metadata;

    /**
     * @var ?string $idempotencyKey
     */
    #[JsonProperty('idempotencyKey')]
    public ?string $idempotencyKey;

    /**
     * @var ?string $failureReason
     */
    #[JsonProperty('failureReason')]
    public ?string $failureReason;

    /**
     * @var value-of<DocumentsImportFrom200ResponseDocumentThumbnailState> $thumbnailState
     */
    #[JsonProperty('thumbnailState')]
    public string $thumbnailState;

    /**
     * @var ?string $thumbnailUrl
     */
    #[JsonProperty('thumbnailUrl')]
    public ?string $thumbnailUrl;

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
     * @var ?string $createdBy
     */
    #[JsonProperty('createdBy')]
    public ?string $createdBy;

    /**
     * @param array{
     *   id: string,
     *   tenantId: string,
     *   name: string,
     *   folderId: string,
     *   state: value-of<DocumentsImportFrom200ResponseDocumentState>,
     *   thumbnailState: value-of<DocumentsImportFrom200ResponseDocumentThumbnailState>,
     *   createdAt: DateTime,
     *   updatedAt: DateTime,
     *   baseSha256?: ?string,
     *   sizeBytes?: ?int,
     *   metadata?: ?array<string, mixed>,
     *   idempotencyKey?: ?string,
     *   failureReason?: ?string,
     *   thumbnailUrl?: ?string,
     *   createdBy?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->tenantId = $values['tenantId'];
        $this->name = $values['name'];
        $this->folderId = $values['folderId'];
        $this->state = $values['state'];
        $this->baseSha256 = $values['baseSha256'] ?? null;
        $this->sizeBytes = $values['sizeBytes'] ?? null;
        $this->metadata = $values['metadata'] ?? null;
        $this->idempotencyKey = $values['idempotencyKey'] ?? null;
        $this->failureReason = $values['failureReason'] ?? null;
        $this->thumbnailState = $values['thumbnailState'];
        $this->thumbnailUrl = $values['thumbnailUrl'] ?? null;
        $this->createdAt = $values['createdAt'];
        $this->updatedAt = $values['updatedAt'];
        $this->createdBy = $values['createdBy'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
