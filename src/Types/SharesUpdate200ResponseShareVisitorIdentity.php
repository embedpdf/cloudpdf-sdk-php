<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class SharesUpdate200ResponseShareVisitorIdentity extends JsonSerializableType
{
    /**
     * @var SharesUpdate200ResponseShareVisitorIdentityFields $fields
     */
    #[JsonProperty('fields')]
    public SharesUpdate200ResponseShareVisitorIdentityFields $fields;

    /**
     * @var value-of<SharesUpdate200ResponseShareVisitorIdentityAsk> $ask
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
     *   fields: SharesUpdate200ResponseShareVisitorIdentityFields,
     *   ask: value-of<SharesUpdate200ResponseShareVisitorIdentityAsk>,
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
