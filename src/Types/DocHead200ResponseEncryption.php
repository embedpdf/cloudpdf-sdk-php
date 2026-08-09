<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocHead200ResponseEncryption extends JsonSerializableType
{
    /**
     * @var value-of<DocHead200ResponseEncryptionState> $state
     */
    #[JsonProperty('state')]
    public string $state;

    /**
     * @var ?bool $requiresPassword
     */
    #[JsonProperty('requiresPassword')]
    public ?bool $requiresPassword;

    /**
     * @param array{
     *   state: value-of<DocHead200ResponseEncryptionState>,
     *   requiresPassword?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->state = $values['state'];
        $this->requiresPassword = $values['requiresPassword'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
