<?php

namespace CloudPDF\Shares\Requests;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class SharesCreateRequest extends JsonSerializableType
{
    /**
     * @var string $docId
     */
    #[JsonProperty('docId')]
    public string $docId;

    /**
     * @var ?string $layerName
     */
    #[JsonProperty('layerName')]
    public ?string $layerName;

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
     *   layerName?: ?string,
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
        $this->layerName = $values['layerName'] ?? null;
        $this->scope = $values['scope'];
        $this->origins = $values['origins'] ?? null;
        $this->password = $values['password'] ?? null;
        $this->sessionTtlSeconds = $values['sessionTtlSeconds'] ?? null;
        $this->expiresAt = $values['expiresAt'] ?? null;
    }
}
