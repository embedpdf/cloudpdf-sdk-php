<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class GrantsExchange200ResponseVisitorIdentityRequestFields extends JsonSerializableType
{
    /**
     * @var ?value-of<GrantsExchange200ResponseVisitorIdentityRequestFieldsDisplayName> $displayName
     */
    #[JsonProperty('displayName')]
    public ?string $displayName;

    /**
     * @var ?value-of<GrantsExchange200ResponseVisitorIdentityRequestFieldsEmail> $email
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?value-of<GrantsExchange200ResponseVisitorIdentityRequestFieldsTitle> $title
     */
    #[JsonProperty('title')]
    public ?string $title;

    /**
     * @var ?value-of<GrantsExchange200ResponseVisitorIdentityRequestFieldsOrganization> $organization
     */
    #[JsonProperty('organization')]
    public ?string $organization;

    /**
     * @var ?value-of<GrantsExchange200ResponseVisitorIdentityRequestFieldsOrganizationalUnit> $organizationalUnit
     */
    #[JsonProperty('organizationalUnit')]
    public ?string $organizationalUnit;

    /**
     * @param array{
     *   displayName?: ?value-of<GrantsExchange200ResponseVisitorIdentityRequestFieldsDisplayName>,
     *   email?: ?value-of<GrantsExchange200ResponseVisitorIdentityRequestFieldsEmail>,
     *   title?: ?value-of<GrantsExchange200ResponseVisitorIdentityRequestFieldsTitle>,
     *   organization?: ?value-of<GrantsExchange200ResponseVisitorIdentityRequestFieldsOrganization>,
     *   organizationalUnit?: ?value-of<GrantsExchange200ResponseVisitorIdentityRequestFieldsOrganizationalUnit>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->displayName = $values['displayName'] ?? null;
        $this->email = $values['email'] ?? null;
        $this->title = $values['title'] ?? null;
        $this->organization = $values['organization'] ?? null;
        $this->organizationalUnit = $values['organizationalUnit'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
