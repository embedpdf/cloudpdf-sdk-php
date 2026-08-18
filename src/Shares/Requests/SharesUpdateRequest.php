<?php

namespace CloudPDF\Shares\Requests;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class SharesUpdateRequest extends JsonSerializableType
{
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
        $this->scope = $values['scope'] ?? null;
        $this->origins = $values['origins'] ?? null;
        $this->password = $values['password'] ?? null;
        $this->sessionTtlSeconds = $values['sessionTtlSeconds'] ?? null;
        $this->disabled = $values['disabled'] ?? null;
        $this->expiresAt = $values['expiresAt'] ?? null;
    }
}
