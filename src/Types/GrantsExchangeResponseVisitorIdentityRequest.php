<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class GrantsExchangeResponseVisitorIdentityRequest extends JsonSerializableType
{
    /**
     * @var GrantsExchangeResponseVisitorIdentityRequestFields $fields
     */
    #[JsonProperty('fields')]
    public GrantsExchangeResponseVisitorIdentityRequestFields $fields;

    /**
     * @var array<value-of<GrantsExchangeResponseVisitorIdentityRequestMissingItem>> $missing
     */
    #[JsonProperty('missing'), ArrayType(['string'])]
    public array $missing;

    /**
     * @var array<value-of<GrantsExchangeResponseVisitorIdentityRequestInvalidItem>> $invalid
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
     *   fields: GrantsExchangeResponseVisitorIdentityRequestFields,
     *   missing: array<value-of<GrantsExchangeResponseVisitorIdentityRequestMissingItem>>,
     *   invalid: array<value-of<GrantsExchangeResponseVisitorIdentityRequestInvalidItem>>,
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
