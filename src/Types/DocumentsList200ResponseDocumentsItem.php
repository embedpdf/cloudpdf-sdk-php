<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;
use Cloudpdf\Core\Types\ArrayType;

class DocumentsList200ResponseDocumentsItem extends JsonSerializableType
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
     * @var value-of<DocumentsList200ResponseDocumentsItemState> $state
     */
    #[JsonProperty('state')]
    public string $state;

    /**
     * @var ?string $baseSha
     */
    #[JsonProperty('baseSha')]
    public ?string $baseSha;

    /**
     * @var ?float $storageSizeBytes
     */
    #[JsonProperty('storageSizeBytes')]
    public ?float $storageSizeBytes;

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
     * @var ?value-of<DocumentsList200ResponseDocumentsItemThumbnailState> $thumbnailState
     */
    #[JsonProperty('thumbnailState')]
    public ?string $thumbnailState;

    /**
     * @var ?string $thumbnailUrl
     */
    #[JsonProperty('thumbnailUrl')]
    public ?string $thumbnailUrl;

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
     * @var ?string $createdBy
     */
    #[JsonProperty('createdBy')]
    public ?string $createdBy;

    /**
     * @param array{
     *   id: string,
     *   tenantId: string,
     *   state: value-of<DocumentsList200ResponseDocumentsItemState>,
     *   createdAt: float,
     *   updatedAt: float,
     *   baseSha?: ?string,
     *   storageSizeBytes?: ?float,
     *   metadata?: ?array<string, mixed>,
     *   idempotencyKey?: ?string,
     *   failureReason?: ?string,
     *   thumbnailState?: ?value-of<DocumentsList200ResponseDocumentsItemThumbnailState>,
     *   thumbnailUrl?: ?string,
     *   createdBy?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->tenantId = $values['tenantId'];
        $this->state = $values['state'];
        $this->baseSha = $values['baseSha'] ?? null;
        $this->storageSizeBytes = $values['storageSizeBytes'] ?? null;
        $this->metadata = $values['metadata'] ?? null;
        $this->idempotencyKey = $values['idempotencyKey'] ?? null;
        $this->failureReason = $values['failureReason'] ?? null;
        $this->thumbnailState = $values['thumbnailState'] ?? null;
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
