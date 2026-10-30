<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class GrantsList200ResponseGrantsItemVisitorIdentityFields extends JsonSerializableType
{
    /**
     * @var ?value-of<GrantsList200ResponseGrantsItemVisitorIdentityFieldsDisplayName> $displayName
     */
    #[JsonProperty('displayName')]
    public ?string $displayName;

    /**
     * @var ?value-of<GrantsList200ResponseGrantsItemVisitorIdentityFieldsEmail> $email
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?value-of<GrantsList200ResponseGrantsItemVisitorIdentityFieldsTitle> $title
     */
    #[JsonProperty('title')]
    public ?string $title;

    /**
     * @var ?value-of<GrantsList200ResponseGrantsItemVisitorIdentityFieldsOrganization> $organization
     */
    #[JsonProperty('organization')]
    public ?string $organization;

    /**
     * @var ?value-of<GrantsList200ResponseGrantsItemVisitorIdentityFieldsOrganizationalUnit> $organizationalUnit
     */
    #[JsonProperty('organizationalUnit')]
    public ?string $organizationalUnit;

    /**
     * @param array{
     *   displayName?: ?value-of<GrantsList200ResponseGrantsItemVisitorIdentityFieldsDisplayName>,
     *   email?: ?value-of<GrantsList200ResponseGrantsItemVisitorIdentityFieldsEmail>,
     *   title?: ?value-of<GrantsList200ResponseGrantsItemVisitorIdentityFieldsTitle>,
     *   organization?: ?value-of<GrantsList200ResponseGrantsItemVisitorIdentityFieldsOrganization>,
     *   organizationalUnit?: ?value-of<GrantsList200ResponseGrantsItemVisitorIdentityFieldsOrganizationalUnit>,
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
