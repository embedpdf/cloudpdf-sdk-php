<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class GrantsExchange200ResponseVisitor extends JsonSerializableType
{
    /**
     * @var string $handle
     */
    #[JsonProperty('handle')]
    public string $handle;

    /**
     * @var bool $keep
     */
    #[JsonProperty('keep')]
    public bool $keep;

    /**
     * @var ?GrantsExchange200ResponseVisitorIdentityRequest $identityRequest
     */
    #[JsonProperty('identityRequest')]
    public ?GrantsExchange200ResponseVisitorIdentityRequest $identityRequest;

    /**
     * @param array{
     *   handle: string,
     *   keep: bool,
     *   identityRequest?: ?GrantsExchange200ResponseVisitorIdentityRequest,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->handle = $values['handle'];
        $this->keep = $values['keep'];
        $this->identityRequest = $values['identityRequest'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
