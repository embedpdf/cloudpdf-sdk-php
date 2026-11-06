<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class GrantsArchiveResponseGrantVisitorIdentity extends JsonSerializableType
{
    /**
     * @var GrantsArchiveResponseGrantVisitorIdentityFields $fields
     */
    #[JsonProperty('fields')]
    public GrantsArchiveResponseGrantVisitorIdentityFields $fields;

    /**
     * @var value-of<GrantsArchiveResponseGrantVisitorIdentityAsk> $ask
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
     *   fields: GrantsArchiveResponseGrantVisitorIdentityFields,
     *   ask: value-of<GrantsArchiveResponseGrantVisitorIdentityAsk>,
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
