<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class GrantsUpdate200ResponseGrantVisitorIdentity extends JsonSerializableType
{
    /**
     * @var GrantsUpdate200ResponseGrantVisitorIdentityFields $fields
     */
    #[JsonProperty('fields')]
    public GrantsUpdate200ResponseGrantVisitorIdentityFields $fields;

    /**
     * @var value-of<GrantsUpdate200ResponseGrantVisitorIdentityAsk> $ask
     */
    #[JsonProperty('ask')]
    public string $ask;

    /**
     * @var ?string $purpose
     */
    #[JsonProperty('purpose')]
    public ?string $purpose;

    /**
     * @var ?string $privacyUrl
     */
    #[JsonProperty('privacyUrl')]
    public ?string $privacyUrl;

    /**
     * @param array{
     *   fields: GrantsUpdate200ResponseGrantVisitorIdentityFields,
     *   ask: value-of<GrantsUpdate200ResponseGrantVisitorIdentityAsk>,
     *   purpose?: ?string,
     *   privacyUrl?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fields = $values['fields'];
        $this->ask = $values['ask'];
        $this->purpose = $values['purpose'] ?? null;
        $this->privacyUrl = $values['privacyUrl'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
