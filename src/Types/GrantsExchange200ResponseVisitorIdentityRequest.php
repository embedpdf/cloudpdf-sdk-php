<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class GrantsExchange200ResponseVisitorIdentityRequest extends JsonSerializableType
{
    /**
     * @var GrantsExchange200ResponseVisitorIdentityRequestFields $fields
     */
    #[JsonProperty('fields')]
    public GrantsExchange200ResponseVisitorIdentityRequestFields $fields;

    /**
     * @var array<value-of<GrantsExchange200ResponseVisitorIdentityRequestMissingItem>> $missing
     */
    #[JsonProperty('missing'), ArrayType(['string'])]
    public array $missing;

    /**
     * @var array<value-of<GrantsExchange200ResponseVisitorIdentityRequestInvalidItem>> $invalid
     */
    #[JsonProperty('invalid'), ArrayType(['string'])]
    public array $invalid;

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
     *   fields: GrantsExchange200ResponseVisitorIdentityRequestFields,
     *   missing: array<value-of<GrantsExchange200ResponseVisitorIdentityRequestMissingItem>>,
     *   invalid: array<value-of<GrantsExchange200ResponseVisitorIdentityRequestInvalidItem>>,
     *   purpose?: ?string,
     *   privacyUrl?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fields = $values['fields'];
        $this->missing = $values['missing'];
        $this->invalid = $values['invalid'];
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
