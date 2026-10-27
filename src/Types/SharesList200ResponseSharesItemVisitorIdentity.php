<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class SharesList200ResponseSharesItemVisitorIdentity extends JsonSerializableType
{
    /**
     * @var SharesList200ResponseSharesItemVisitorIdentityFields $fields
     */
    #[JsonProperty('fields')]
    public SharesList200ResponseSharesItemVisitorIdentityFields $fields;

    /**
     * @var value-of<SharesList200ResponseSharesItemVisitorIdentityAsk> $ask
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
     *   fields: SharesList200ResponseSharesItemVisitorIdentityFields,
     *   ask: value-of<SharesList200ResponseSharesItemVisitorIdentityAsk>,
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
