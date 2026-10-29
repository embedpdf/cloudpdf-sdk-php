<?php

namespace CloudPDF\Shares\Requests;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Shares\Types\SharesUpdateRequestLayerMode;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Shares\Types\SharesUpdateRequestVisitorIdentity;
use CloudPDF\Types\Identity;
use CloudPDF\Core\Types\ArrayType;

class SharesUpdateRequest extends JsonSerializableType
{
    /**
     * @var ?value-of<SharesUpdateRequestLayerMode> $layerMode
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
     * @var ?SharesUpdateRequestVisitorIdentity $visitorIdentity
     */
    #[JsonProperty('visitorIdentity')]
    public ?SharesUpdateRequestVisitorIdentity $visitorIdentity;

    /**
     * @var ?Identity $identity
     */
    #[JsonProperty('identity')]
    public ?Identity $identity;

    /**
     * @var ?array<string> $scope
     */
    #[JsonProperty('scope'), ArrayType(['string'])]
    public ?array $scope;

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
     * @var ?bool $disabled
     */
    #[JsonProperty('disabled')]
    public ?bool $disabled;

    /**
     * @var ?int $expiresAt
     */
    #[JsonProperty('expiresAt')]
    public ?int $expiresAt;

    /**
     * @param array{
     *   layerMode?: ?value-of<SharesUpdateRequestLayerMode>,
     *   layerName?: ?string,
     *   keepVisitorLayers?: ?bool,
     *   visitorIdleSeconds?: ?int,
     *   visitorIdentity?: ?SharesUpdateRequestVisitorIdentity,
     *   identity?: ?Identity,
     *   scope?: ?array<string>,
     *   origins?: ?array<string>,
     *   password?: ?string,
     *   sessionTtlSeconds?: ?int,
     *   disabled?: ?bool,
     *   expiresAt?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->layerMode = $values['layerMode'] ?? null;
        $this->layerName = $values['layerName'] ?? null;
        $this->keepVisitorLayers = $values['keepVisitorLayers'] ?? null;
        $this->visitorIdleSeconds = $values['visitorIdleSeconds'] ?? null;
        $this->visitorIdentity = $values['visitorIdentity'] ?? null;
        $this->identity = $values['identity'] ?? null;
        $this->scope = $values['scope'] ?? null;
        $this->origins = $values['origins'] ?? null;
        $this->password = $values['password'] ?? null;
        $this->sessionTtlSeconds = $values['sessionTtlSeconds'] ?? null;
        $this->disabled = $values['disabled'] ?? null;
        $this->expiresAt = $values['expiresAt'] ?? null;
    }
}
