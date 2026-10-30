<?php

namespace CloudPDF\Grants\Requests;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Grants\Types\GrantsCreateRequestLayerMode;
use CloudPDF\Grants\Types\GrantsCreateRequestVisitorIdentity;
use CloudPDF\Types\Identity;
use CloudPDF\Core\Types\ArrayType;

class GrantsCreateRequest extends JsonSerializableType
{
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
     * @var ?value-of<GrantsCreateRequestLayerMode> $layerMode
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
     * @var ?GrantsCreateRequestVisitorIdentity $visitorIdentity
     */
    #[JsonProperty('visitorIdentity')]
    public ?GrantsCreateRequestVisitorIdentity $visitorIdentity;

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
     * @var ?int $expiresAt
     */
    #[JsonProperty('expiresAt')]
    public ?int $expiresAt;

    /**
     * @param array{
     *   docId: string,
     *   scope: array<string>,
     *   name?: ?string,
     *   layerMode?: ?value-of<GrantsCreateRequestLayerMode>,
     *   layerName?: ?string,
     *   keepVisitorLayers?: ?bool,
     *   visitorIdleSeconds?: ?int,
     *   visitorIdentity?: ?GrantsCreateRequestVisitorIdentity,
     *   identity?: ?Identity,
     *   origins?: ?array<string>,
     *   passphrase?: ?string,
     *   sessionTtlSeconds?: ?int,
     *   expiresAt?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->docId = $values['docId'];
        $this->name = $values['name'] ?? null;
        $this->layerMode = $values['layerMode'] ?? null;
        $this->layerName = $values['layerName'] ?? null;
        $this->keepVisitorLayers = $values['keepVisitorLayers'] ?? null;
        $this->visitorIdleSeconds = $values['visitorIdleSeconds'] ?? null;
        $this->visitorIdentity = $values['visitorIdentity'] ?? null;
        $this->identity = $values['identity'] ?? null;
        $this->scope = $values['scope'];
        $this->origins = $values['origins'] ?? null;
        $this->passphrase = $values['passphrase'] ?? null;
        $this->sessionTtlSeconds = $values['sessionTtlSeconds'] ?? null;
        $this->expiresAt = $values['expiresAt'] ?? null;
    }
}
