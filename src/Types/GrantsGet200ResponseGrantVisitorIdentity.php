<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class GrantsGet200ResponseGrantVisitorIdentity extends JsonSerializableType
{
    /**
     * @var GrantsGet200ResponseGrantVisitorIdentityFields $fields
     */
    #[JsonProperty('fields')]
    public GrantsGet200ResponseGrantVisitorIdentityFields $fields;

    /**
     * @var value-of<GrantsGet200ResponseGrantVisitorIdentityAsk> $ask
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
     *   fields: GrantsGet200ResponseGrantVisitorIdentityFields,
     *   ask: value-of<GrantsGet200ResponseGrantVisitorIdentityAsk>,
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
