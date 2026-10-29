<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class SharesGet200ResponseShare extends JsonSerializableType
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
     * @var string $docId
     */
    #[JsonProperty('docId')]
    public string $docId;

    /**
     * @var value-of<SharesGet200ResponseShareLayerMode> $layerMode
     */
    #[JsonProperty('layerMode')]
    public string $layerMode;

    /**
     * @var ?string $layerName
     */
    #[JsonProperty('layerName')]
    public ?string $layerName;

    /**
     * @var bool $keepVisitorLayers
     */
    #[JsonProperty('keepVisitorLayers')]
    public bool $keepVisitorLayers;

    /**
     * @var ?float $visitorIdleSeconds
     */
    #[JsonProperty('visitorIdleSeconds')]
    public ?float $visitorIdleSeconds;

    /**
     * @var ?SharesGet200ResponseShareVisitorIdentity $visitorIdentity
     */
    #[JsonProperty('visitorIdentity')]
    public ?SharesGet200ResponseShareVisitorIdentity $visitorIdentity;

    /**
     * @var ?Identity $identity
     */
    #[JsonProperty('identity')]
    public ?Identity $identity;

    /**
     * @var array<string> $scope
     */
    #[JsonProperty('scope'), ArrayType(['string'])]
    public array $scope;

    /**
     * @var ?array<string> $origins
     */
    #[JsonProperty('origins'), ArrayType(['string'])]
    public ?array $origins;

    /**
     * @var bool $passwordProtected
     */
    #[JsonProperty('passwordProtected')]
    public bool $passwordProtected;

    /**
     * @var float $sessionTtlSeconds
     */
    #[JsonProperty('sessionTtlSeconds')]
    public float $sessionTtlSeconds;

    /**
     * @var bool $disabled
     */
    #[JsonProperty('disabled')]
    public bool $disabled;

    /**
     * @var ?float $archivedAt
     */
    #[JsonProperty('archivedAt')]
    public ?float $archivedAt;

    /**
     * @var ?float $expiresAt
     */
    #[JsonProperty('expiresAt')]
    public ?float $expiresAt;

    /**
     * @var float $exchangeCount
     */
    #[JsonProperty('exchangeCount')]
    public float $exchangeCount;

    /**
     * @var ?float $lastExchangedAt
     */
    #[JsonProperty('lastExchangedAt')]
    public ?float $lastExchangedAt;

    /**
     * @var string $createdBy
     */
    #[JsonProperty('createdBy')]
    public string $createdBy;

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
     * @param array{
     *   id: string,
     *   tenantId: string,
     *   docId: string,
     *   layerMode: value-of<SharesGet200ResponseShareLayerMode>,
     *   keepVisitorLayers: bool,
     *   scope: array<string>,
     *   passwordProtected: bool,
     *   sessionTtlSeconds: float,
     *   disabled: bool,
     *   exchangeCount: float,
     *   createdBy: string,
     *   createdAt: float,
     *   updatedAt: float,
     *   layerName?: ?string,
     *   visitorIdleSeconds?: ?float,
     *   visitorIdentity?: ?SharesGet200ResponseShareVisitorIdentity,
     *   identity?: ?Identity,
     *   origins?: ?array<string>,
     *   archivedAt?: ?float,
     *   expiresAt?: ?float,
     *   lastExchangedAt?: ?float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->tenantId = $values['tenantId'];
        $this->docId = $values['docId'];
        $this->layerMode = $values['layerMode'];
        $this->layerName = $values['layerName'] ?? null;
        $this->keepVisitorLayers = $values['keepVisitorLayers'];
        $this->visitorIdleSeconds = $values['visitorIdleSeconds'] ?? null;
        $this->visitorIdentity = $values['visitorIdentity'] ?? null;
        $this->identity = $values['identity'] ?? null;
        $this->scope = $values['scope'];
        $this->origins = $values['origins'] ?? null;
        $this->passwordProtected = $values['passwordProtected'];
        $this->sessionTtlSeconds = $values['sessionTtlSeconds'];
        $this->disabled = $values['disabled'];
        $this->archivedAt = $values['archivedAt'] ?? null;
        $this->expiresAt = $values['expiresAt'] ?? null;
        $this->exchangeCount = $values['exchangeCount'];
        $this->lastExchangedAt = $values['lastExchangedAt'] ?? null;
        $this->createdBy = $values['createdBy'];
        $this->createdAt = $values['createdAt'];
        $this->updatedAt = $values['updatedAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
