<?php

namespace CloudPDF\Grants\Requests;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Grants\Types\GrantsUpdateRequestLayerMode;
use CloudPDF\Grants\Types\GrantsUpdateRequestVisitorIdentity;
use CloudPDF\Types\Identity;
use CloudPDF\Core\Types\ArrayType;

class GrantsUpdateRequest extends JsonSerializableType
{
    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?value-of<GrantsUpdateRequestLayerMode> $layerMode
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
     * @var ?GrantsUpdateRequestVisitorIdentity $visitorIdentity
     */
    #[JsonProperty('visitorIdentity')]
    public ?GrantsUpdateRequestVisitorIdentity $visitorIdentity;

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
     * @var ?string $passphrase
     */
    #[JsonProperty('passphrase')]
    public ?string $passphrase;

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
     *   name?: ?string,
     *   layerMode?: ?value-of<GrantsUpdateRequestLayerMode>,
     *   layerName?: ?string,
     *   keepVisitorLayers?: ?bool,
     *   visitorIdleSeconds?: ?int,
     *   visitorIdentity?: ?GrantsUpdateRequestVisitorIdentity,
     *   identity?: ?Identity,
     *   scope?: ?array<string>,
     *   origins?: ?array<string>,
     *   passphrase?: ?string,
     *   sessionTtlSeconds?: ?int,
     *   disabled?: ?bool,
     *   expiresAt?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->name = $values['name'] ?? null;
        $this->layerMode = $values['layerMode'] ?? null;
        $this->layerName = $values['layerName'] ?? null;
        $this->keepVisitorLayers = $values['keepVisitorLayers'] ?? null;
        $this->visitorIdleSeconds = $values['visitorIdleSeconds'] ?? null;
        $this->visitorIdentity = $values['visitorIdentity'] ?? null;
        $this->identity = $values['identity'] ?? null;
        $this->scope = $values['scope'] ?? null;
        $this->origins = $values['origins'] ?? null;
        $this->passphrase = $values['passphrase'] ?? null;
        $this->sessionTtlSeconds = $values['sessionTtlSeconds'] ?? null;
        $this->disabled = $values['disabled'] ?? null;
        $this->expiresAt = $values['expiresAt'] ?? null;
    }
}
