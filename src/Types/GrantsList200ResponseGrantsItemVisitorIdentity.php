<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class GrantsList200ResponseGrantsItemVisitorIdentity extends JsonSerializableType
{
    /**
     * @var GrantsList200ResponseGrantsItemVisitorIdentityFields $fields
     */
    #[JsonProperty('fields')]
    public GrantsList200ResponseGrantsItemVisitorIdentityFields $fields;

    /**
     * @var value-of<GrantsList200ResponseGrantsItemVisitorIdentityAsk> $ask
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
     *   fields: GrantsList200ResponseGrantsItemVisitorIdentityFields,
     *   ask: value-of<GrantsList200ResponseGrantsItemVisitorIdentityAsk>,
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
