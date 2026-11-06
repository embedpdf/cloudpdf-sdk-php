<?php

namespace CloudPDF\Tokens\Requests;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use DateTime;
use CloudPDF\Core\Types\Date;

class TokensRevokeRequest extends JsonSerializableType
{
    /**
     * @var ?string $reason
     */
    #[JsonProperty('reason')]
    public ?string $reason;

    /**
     * @var ?DateTime $expiresAt
     */
    #[JsonProperty('expiresAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $expiresAt;

    /**
     * @param array{
     *   reason?: ?string,
     *   expiresAt?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->reason = $values['reason'] ?? null;
        $this->expiresAt = $values['expiresAt'] ?? null;
    }
}
