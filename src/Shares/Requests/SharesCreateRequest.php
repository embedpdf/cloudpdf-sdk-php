<?php

namespace CloudPDF\Shares\Requests;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Shares\Types\SharesCreateRequestLayerMode;
use CloudPDF\Shares\Types\SharesCreateRequestVisitorIdentity;
use CloudPDF\Types\Identity;
use CloudPDF\Core\Types\ArrayType;

class SharesCreateRequest extends JsonSerializableType
{
    /**
     * @var string $docId
     */
    #[JsonProperty('docId')]
    public string $docId;

    /**
     * @var ?value-of<SharesCreateRequestLayerMode> $layerMode
     */
    #[JsonProperty('layerMode')]
    public ?string $layerMode;

    /**
     * @var ?string $layerName
     */
    #[JsonProperty('layerName')]
    public ?string $layerName;

    /**
     * @var ?bool $keepVisitorLayers
     */
    #[JsonProperty('keepVisitorLayers')]
    public ?bool $keepVisitorLayers;

    /**
     * @var ?int $visitorIdleSeconds
     */
    #[JsonProperty('visitorIdleSeconds')]
    public ?int $visitorIdleSeconds;

    /**
     * @var ?SharesCreateRequestVisitorIdentity $visitorIdentity
     */
    #[JsonProperty('visitorIdentity')]
    public ?SharesCreateRequestVisitorIdentity $visitorIdentity;

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
     * @var ?string $password
     */
    #[JsonProperty('password')]
    public ?string $password;

    /**
     * @var ?int $sessionTtlSeconds
     */
    #[JsonProperty('sessionTtlSeconds')]
    public ?int $sessionTtlSeconds;

    /**
     * @var ?int $expiresAt
     */
    #[JsonProperty('expiresAt')]
    public ?int $expiresAt;

    /**
     * @param array{
     *   docId: string,
     *   scope: array<string>,
     *   layerMode?: ?value-of<SharesCreateRequestLayerMode>,
     *   layerName?: ?string,
     *   keepVisitorLayers?: ?bool,
     *   visitorIdleSeconds?: ?int,
     *   visitorIdentity?: ?SharesCreateRequestVisitorIdentity,
     *   identity?: ?Identity,
     *   origins?: ?array<string>,
     *   password?: ?string,
     *   sessionTtlSeconds?: ?int,
     *   expiresAt?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->docId = $values['docId'];
        $this->layerMode = $values['layerMode'] ?? null;
        $this->layerName = $values['layerName'] ?? null;
        $this->keepVisitorLayers = $values['keepVisitorLayers'] ?? null;
        $this->visitorIdleSeconds = $values['visitorIdleSeconds'] ?? null;
        $this->visitorIdentity = $values['visitorIdentity'] ?? null;
        $this->identity = $values['identity'] ?? null;
        $this->scope = $values['scope'];
        $this->origins = $values['origins'] ?? null;
        $this->password = $values['password'] ?? null;
        $this->sessionTtlSeconds = $values['sessionTtlSeconds'] ?? null;
        $this->expiresAt = $values['expiresAt'] ?? null;
    }
}
