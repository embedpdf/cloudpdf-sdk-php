<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class GrantsArchiveResponseGrantVisitorIdentityFields extends JsonSerializableType
{
    /**
     * @var ?value-of<GrantsArchiveResponseGrantVisitorIdentityFieldsDisplayName> $displayName
     */
    #[JsonProperty('displayName')]
    public ?string $displayName;

    /**
     * @var ?value-of<GrantsArchiveResponseGrantVisitorIdentityFieldsEmail> $email
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?value-of<GrantsArchiveResponseGrantVisitorIdentityFieldsTitle> $title
     */
    #[JsonProperty('title')]
    public ?string $title;

    /**
     * @var ?value-of<GrantsArchiveResponseGrantVisitorIdentityFieldsOrganization> $organization
     */
    #[JsonProperty('organization')]
    public ?string $organization;

    /**
     * @var ?value-of<GrantsArchiveResponseGrantVisitorIdentityFieldsOrganizationalUnit> $organizationalUnit
     */
    #[JsonProperty('organizationalUnit')]
    public ?string $organizationalUnit;

    /**
     * @param array{
     *   displayName?: ?value-of<GrantsArchiveResponseGrantVisitorIdentityFieldsDisplayName>,
     *   email?: ?value-of<GrantsArchiveResponseGrantVisitorIdentityFieldsEmail>,
     *   title?: ?value-of<GrantsArchiveResponseGrantVisitorIdentityFieldsTitle>,
     *   organization?: ?value-of<GrantsArchiveResponseGrantVisitorIdentityFieldsOrganization>,
     *   organizationalUnit?: ?value-of<GrantsArchiveResponseGrantVisitorIdentityFieldsOrganizationalUnit>,
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
