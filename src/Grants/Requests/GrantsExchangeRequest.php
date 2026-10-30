<?php

namespace CloudPDF\Grants\Requests;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Grants\Types\GrantsExchangeRequestVisitorIdentity;

class GrantsExchangeRequest extends JsonSerializableType
{
    /**
     * @var string $grant
     */
    #[JsonProperty('grant')]
    public string $grant;

    /**
     * @var ?string $passphrase
     */
    #[JsonProperty('passphrase')]
    public ?string $passphrase;

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
     * @var ?GrantsExchangeRequestVisitorIdentity $visitorIdentity
     */
    #[JsonProperty('visitorIdentity')]
    public ?GrantsExchangeRequestVisitorIdentity $visitorIdentity;

    /**
     * @param array{
     *   grant: string,
     *   passphrase?: ?string,
     *   visitorHandle?: ?string,
     *   restart?: ?bool,
     *   visitorIdentity?: ?GrantsExchangeRequestVisitorIdentity,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->grant = $values['grant'];
        $this->passphrase = $values['passphrase'] ?? null;
        $this->visitorHandle = $values['visitorHandle'] ?? null;
        $this->restart = $values['restart'] ?? null;
        $this->visitorIdentity = $values['visitorIdentity'] ?? null;
    }
}
