<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class SharesArchive200ResponseShareVisitorIdentity extends JsonSerializableType
{
    /**
     * @var SharesArchive200ResponseShareVisitorIdentityFields $fields
     */
    #[JsonProperty('fields')]
    public SharesArchive200ResponseShareVisitorIdentityFields $fields;

    /**
     * @var value-of<SharesArchive200ResponseShareVisitorIdentityAsk> $ask
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
     *   fields: SharesArchive200ResponseShareVisitorIdentityFields,
     *   ask: value-of<SharesArchive200ResponseShareVisitorIdentityAsk>,
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
