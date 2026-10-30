<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class GrantsCreate200ResponseGrantVisitorIdentity extends JsonSerializableType
{
    /**
     * @var GrantsCreate200ResponseGrantVisitorIdentityFields $fields
     */
    #[JsonProperty('fields')]
    public GrantsCreate200ResponseGrantVisitorIdentityFields $fields;

    /**
     * @var value-of<GrantsCreate200ResponseGrantVisitorIdentityAsk> $ask
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
     *   fields: GrantsCreate200ResponseGrantVisitorIdentityFields,
     *   ask: value-of<GrantsCreate200ResponseGrantVisitorIdentityAsk>,
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
