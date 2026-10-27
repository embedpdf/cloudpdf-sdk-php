<?php

namespace CloudPDF\Shares\Requests;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Shares\Types\SharesExchangeRequestVisitorIdentity;

class SharesExchangeRequest extends JsonSerializableType
{
    /**
     * @var string $shareToken
     */
    #[JsonProperty('shareToken')]
    public string $shareToken;

    /**
     * @var ?string $password
     */
    #[JsonProperty('password')]
    public ?string $password;

    /**
     * @var ?string $visitorHandle
     */
    #[JsonProperty('visitorHandle')]
    public ?string $visitorHandle;

    /**
     * @var ?bool $restart
     */
    #[JsonProperty('restart')]
    public ?bool $restart;

    /**
     * @var ?SharesExchangeRequestVisitorIdentity $visitorIdentity
     */
    #[JsonProperty('visitorIdentity')]
    public ?SharesExchangeRequestVisitorIdentity $visitorIdentity;

    /**
     * @param array{
     *   shareToken: string,
     *   password?: ?string,
     *   visitorHandle?: ?string,
     *   restart?: ?bool,
     *   visitorIdentity?: ?SharesExchangeRequestVisitorIdentity,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->shareToken = $values['shareToken'];
        $this->password = $values['password'] ?? null;
        $this->visitorHandle = $values['visitorHandle'] ?? null;
        $this->restart = $values['restart'] ?? null;
        $this->visitorIdentity = $values['visitorIdentity'] ?? null;
    }
}
