<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;
use DateTime;
use CloudPDF\Core\Types\Date;

class GrantsListResponseGrantsItem extends JsonSerializableType
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
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var value-of<GrantsListResponseGrantsItemLayerMode> $layerMode
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
     * @var ?int $visitorIdleSeconds
     */
    #[JsonProperty('visitorIdleSeconds')]
    public ?int $visitorIdleSeconds;

    /**
     * @var ?GrantsListResponseGrantsItemVisitorIdentity $visitorIdentity
     */
    #[JsonProperty('visitorIdentity')]
    public ?GrantsListResponseGrantsItemVisitorIdentity $visitorIdentity;

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
     * @var bool $passphraseProtected
     */
    #[JsonProperty('passphraseProtected')]
    public bool $passphraseProtected;

    /**
     * @var int $sessionTtlSeconds
     */
    #[JsonProperty('sessionTtlSeconds')]
    public int $sessionTtlSeconds;

    /**
     * @var bool $disabled
     */
    #[JsonProperty('disabled')]
    public bool $disabled;

    /**
     * @var ?DateTime $archivedAt
     */
    #[JsonProperty('archivedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $archivedAt;

    /**
     * @var ?DateTime $expiresAt
     */
    #[JsonProperty('expiresAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $expiresAt;

    /**
     * @var int $exchangeCount
     */
    #[JsonProperty('exchangeCount')]
    public int $exchangeCount;

    /**
     * @var ?DateTime $lastExchangedAt
     */
    #[JsonProperty('lastExchangedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $lastExchangedAt;

    /**
     * @var string $createdBy
     */
    #[JsonProperty('createdBy')]
    public string $createdBy;

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
     * @param array{
     *   id: string,
     *   tenantId: string,
     *   docId: string,
     *   layerMode: value-of<GrantsListResponseGrantsItemLayerMode>,
     *   keepVisitorLayers: bool,
     *   scope: array<string>,
     *   passphraseProtected: bool,
     *   sessionTtlSeconds: int,
     *   disabled: bool,
     *   exchangeCount: int,
     *   createdBy: string,
     *   createdAt: DateTime,
     *   updatedAt: DateTime,
     *   name?: ?string,
     *   layerName?: ?string,
     *   visitorIdleSeconds?: ?int,
     *   visitorIdentity?: ?GrantsListResponseGrantsItemVisitorIdentity,
     *   identity?: ?Identity,
     *   origins?: ?array<string>,
     *   archivedAt?: ?DateTime,
     *   expiresAt?: ?DateTime,
     *   lastExchangedAt?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->tenantId = $values['tenantId'];
        $this->docId = $values['docId'];
        $this->name = $values['name'] ?? null;
        $this->layerMode = $values['layerMode'];
        $this->layerName = $values['layerName'] ?? null;
        $this->keepVisitorLayers = $values['keepVisitorLayers'];
        $this->visitorIdleSeconds = $values['visitorIdleSeconds'] ?? null;
        $this->visitorIdentity = $values['visitorIdentity'] ?? null;
        $this->identity = $values['identity'] ?? null;
        $this->scope = $values['scope'];
        $this->origins = $values['origins'] ?? null;
        $this->passphraseProtected = $values['passphraseProtected'];
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
