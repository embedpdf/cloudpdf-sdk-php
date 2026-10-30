<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class GrantsArchive200ResponseGrantVisitorIdentityFields extends JsonSerializableType
{
    /**
     * @var ?value-of<GrantsArchive200ResponseGrantVisitorIdentityFieldsDisplayName> $displayName
     */
    #[JsonProperty('displayName')]
    public ?string $displayName;

    /**
     * @var ?value-of<GrantsArchive200ResponseGrantVisitorIdentityFieldsEmail> $email
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?value-of<GrantsArchive200ResponseGrantVisitorIdentityFieldsTitle> $title
     */
    #[JsonProperty('title')]
    public ?string $title;

    /**
     * @var ?value-of<GrantsArchive200ResponseGrantVisitorIdentityFieldsOrganization> $organization
     */
    #[JsonProperty('organization')]
    public ?string $organization;

    /**
     * @var ?value-of<GrantsArchive200ResponseGrantVisitorIdentityFieldsOrganizationalUnit> $organizationalUnit
     */
    #[JsonProperty('organizationalUnit')]
    public ?string $organizationalUnit;

    /**
     * @param array{
     *   displayName?: ?value-of<GrantsArchive200ResponseGrantVisitorIdentityFieldsDisplayName>,
     *   email?: ?value-of<GrantsArchive200ResponseGrantVisitorIdentityFieldsEmail>,
     *   title?: ?value-of<GrantsArchive200ResponseGrantVisitorIdentityFieldsTitle>,
     *   organization?: ?value-of<GrantsArchive200ResponseGrantVisitorIdentityFieldsOrganization>,
     *   organizationalUnit?: ?value-of<GrantsArchive200ResponseGrantVisitorIdentityFieldsOrganizationalUnit>,
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
