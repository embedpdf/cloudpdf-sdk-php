<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class GrantsGet200ResponseGrantVisitorIdentityFields extends JsonSerializableType
{
    /**
     * @var ?value-of<GrantsGet200ResponseGrantVisitorIdentityFieldsDisplayName> $displayName
     */
    #[JsonProperty('displayName')]
    public ?string $displayName;

    /**
     * @var ?value-of<GrantsGet200ResponseGrantVisitorIdentityFieldsEmail> $email
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?value-of<GrantsGet200ResponseGrantVisitorIdentityFieldsTitle> $title
     */
    #[JsonProperty('title')]
    public ?string $title;

    /**
     * @var ?value-of<GrantsGet200ResponseGrantVisitorIdentityFieldsOrganization> $organization
     */
    #[JsonProperty('organization')]
    public ?string $organization;

    /**
     * @var ?value-of<GrantsGet200ResponseGrantVisitorIdentityFieldsOrganizationalUnit> $organizationalUnit
     */
    #[JsonProperty('organizationalUnit')]
    public ?string $organizationalUnit;

    /**
     * @param array{
     *   displayName?: ?value-of<GrantsGet200ResponseGrantVisitorIdentityFieldsDisplayName>,
     *   email?: ?value-of<GrantsGet200ResponseGrantVisitorIdentityFieldsEmail>,
     *   title?: ?value-of<GrantsGet200ResponseGrantVisitorIdentityFieldsTitle>,
     *   organization?: ?value-of<GrantsGet200ResponseGrantVisitorIdentityFieldsOrganization>,
     *   organizationalUnit?: ?value-of<GrantsGet200ResponseGrantVisitorIdentityFieldsOrganizationalUnit>,
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
