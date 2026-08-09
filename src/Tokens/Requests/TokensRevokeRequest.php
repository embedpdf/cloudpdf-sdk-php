<?php

namespace CloudPDF\Tokens\Requests;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class TokensRevokeRequest extends JsonSerializableType
{
    /**
     * @var ?string $reason
     */
    #[JsonProperty('reason')]
    public ?string $reason;

    /**
     * @var ?int $expiresAtSeconds
     */
    #[JsonProperty('expiresAtSeconds')]
    public ?int $expiresAtSeconds;

    /**
     * @param array{
     *   reason?: ?string,
     *   expiresAtSeconds?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->reason = $values['reason'] ?? null;
        $this->expiresAtSeconds = $values['expiresAtSeconds'] ?? null;
    }
}
