<?php

namespace CloudPDF\Shares\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class SharesCreateRequestVisitorIdentity extends JsonSerializableType
{
    /**
     * @var SharesCreateRequestVisitorIdentityFields $fields
     */
    #[JsonProperty('fields')]
    public SharesCreateRequestVisitorIdentityFields $fields;

    /**
     * @var value-of<SharesCreateRequestVisitorIdentityAsk> $ask
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
     *   fields: SharesCreateRequestVisitorIdentityFields,
     *   ask: value-of<SharesCreateRequestVisitorIdentityAsk>,
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
