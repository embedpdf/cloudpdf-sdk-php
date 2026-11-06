<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class GrantsListResponseGrantsItemVisitorIdentity extends JsonSerializableType
{
    /**
     * @var GrantsListResponseGrantsItemVisitorIdentityFields $fields
     */
    #[JsonProperty('fields')]
    public GrantsListResponseGrantsItemVisitorIdentityFields $fields;

    /**
     * @var value-of<GrantsListResponseGrantsItemVisitorIdentityAsk> $ask
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
     *   fields: GrantsListResponseGrantsItemVisitorIdentityFields,
     *   ask: value-of<GrantsListResponseGrantsItemVisitorIdentityAsk>,
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
