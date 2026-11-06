<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class GrantsListResponseGrantsItemVisitorIdentityFields extends JsonSerializableType
{
    /**
     * @var ?value-of<GrantsListResponseGrantsItemVisitorIdentityFieldsDisplayName> $displayName
     */
    #[JsonProperty('displayName')]
    public ?string $displayName;

    /**
     * @var ?value-of<GrantsListResponseGrantsItemVisitorIdentityFieldsEmail> $email
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?value-of<GrantsListResponseGrantsItemVisitorIdentityFieldsTitle> $title
     */
    #[JsonProperty('title')]
    public ?string $title;

    /**
     * @var ?value-of<GrantsListResponseGrantsItemVisitorIdentityFieldsOrganization> $organization
     */
    #[JsonProperty('organization')]
    public ?string $organization;

    /**
     * @var ?value-of<GrantsListResponseGrantsItemVisitorIdentityFieldsOrganizationalUnit> $organizationalUnit
     */
    #[JsonProperty('organizationalUnit')]
    public ?string $organizationalUnit;

    /**
     * @param array{
     *   displayName?: ?value-of<GrantsListResponseGrantsItemVisitorIdentityFieldsDisplayName>,
     *   email?: ?value-of<GrantsListResponseGrantsItemVisitorIdentityFieldsEmail>,
     *   title?: ?value-of<GrantsListResponseGrantsItemVisitorIdentityFieldsTitle>,
     *   organization?: ?value-of<GrantsListResponseGrantsItemVisitorIdentityFieldsOrganization>,
     *   organizationalUnit?: ?value-of<GrantsListResponseGrantsItemVisitorIdentityFieldsOrganizationalUnit>,
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
