<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class GrantsCreateResponseGrantVisitorIdentityFields extends JsonSerializableType
{
    /**
     * @var ?value-of<GrantsCreateResponseGrantVisitorIdentityFieldsDisplayName> $displayName
     */
    #[JsonProperty('displayName')]
    public ?string $displayName;

    /**
     * @var ?value-of<GrantsCreateResponseGrantVisitorIdentityFieldsEmail> $email
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?value-of<GrantsCreateResponseGrantVisitorIdentityFieldsTitle> $title
     */
    #[JsonProperty('title')]
    public ?string $title;

    /**
     * @var ?value-of<GrantsCreateResponseGrantVisitorIdentityFieldsOrganization> $organization
     */
    #[JsonProperty('organization')]
    public ?string $organization;

    /**
     * @var ?value-of<GrantsCreateResponseGrantVisitorIdentityFieldsOrganizationalUnit> $organizationalUnit
     */
    #[JsonProperty('organizationalUnit')]
    public ?string $organizationalUnit;

    /**
     * @param array{
     *   displayName?: ?value-of<GrantsCreateResponseGrantVisitorIdentityFieldsDisplayName>,
     *   email?: ?value-of<GrantsCreateResponseGrantVisitorIdentityFieldsEmail>,
     *   title?: ?value-of<GrantsCreateResponseGrantVisitorIdentityFieldsTitle>,
     *   organization?: ?value-of<GrantsCreateResponseGrantVisitorIdentityFieldsOrganization>,
     *   organizationalUnit?: ?value-of<GrantsCreateResponseGrantVisitorIdentityFieldsOrganizationalUnit>,
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
