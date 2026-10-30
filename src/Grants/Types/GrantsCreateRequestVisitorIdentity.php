<?php

namespace CloudPDF\Grants\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class GrantsCreateRequestVisitorIdentity extends JsonSerializableType
{
    /**
     * @var GrantsCreateRequestVisitorIdentityFields $fields
     */
    #[JsonProperty('fields')]
    public GrantsCreateRequestVisitorIdentityFields $fields;

    /**
     * @var value-of<GrantsCreateRequestVisitorIdentityAsk> $ask
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
     *   fields: GrantsCreateRequestVisitorIdentityFields,
     *   ask: value-of<GrantsCreateRequestVisitorIdentityAsk>,
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
