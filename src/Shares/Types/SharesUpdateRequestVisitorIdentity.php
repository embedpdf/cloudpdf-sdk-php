<?php

namespace CloudPDF\Shares\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class SharesUpdateRequestVisitorIdentity extends JsonSerializableType
{
    /**
     * @var SharesUpdateRequestVisitorIdentityFields $fields
     */
    #[JsonProperty('fields')]
    public SharesUpdateRequestVisitorIdentityFields $fields;

    /**
     * @var value-of<SharesUpdateRequestVisitorIdentityAsk> $ask
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
     *   fields: SharesUpdateRequestVisitorIdentityFields,
     *   ask: value-of<SharesUpdateRequestVisitorIdentityAsk>,
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
