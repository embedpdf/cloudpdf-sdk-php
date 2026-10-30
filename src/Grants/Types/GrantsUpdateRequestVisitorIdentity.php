<?php

namespace CloudPDF\Grants\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class GrantsUpdateRequestVisitorIdentity extends JsonSerializableType
{
    /**
     * @var GrantsUpdateRequestVisitorIdentityFields $fields
     */
    #[JsonProperty('fields')]
    public GrantsUpdateRequestVisitorIdentityFields $fields;

    /**
     * @var value-of<GrantsUpdateRequestVisitorIdentityAsk> $ask
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
     *   fields: GrantsUpdateRequestVisitorIdentityFields,
     *   ask: value-of<GrantsUpdateRequestVisitorIdentityAsk>,
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
