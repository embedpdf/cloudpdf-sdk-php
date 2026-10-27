<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class SharesExchange200ResponseVisitorIdentityRequest extends JsonSerializableType
{
    /**
     * @var SharesExchange200ResponseVisitorIdentityRequestFields $fields
     */
    #[JsonProperty('fields')]
    public SharesExchange200ResponseVisitorIdentityRequestFields $fields;

    /**
     * @var array<value-of<SharesExchange200ResponseVisitorIdentityRequestMissingItem>> $missing
     */
    #[JsonProperty('missing'), ArrayType(['string'])]
    public array $missing;

    /**
     * @var array<value-of<SharesExchange200ResponseVisitorIdentityRequestInvalidItem>> $invalid
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
     *   fields: SharesExchange200ResponseVisitorIdentityRequestFields,
     *   missing: array<value-of<SharesExchange200ResponseVisitorIdentityRequestMissingItem>>,
     *   invalid: array<value-of<SharesExchange200ResponseVisitorIdentityRequestInvalidItem>>,
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
