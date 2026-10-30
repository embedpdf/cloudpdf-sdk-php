<?php

namespace CloudPDF\Grants\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class GrantsCreateRequestVisitorIdentityFields extends JsonSerializableType
{
    /**
     * @var ?value-of<GrantsCreateRequestVisitorIdentityFieldsDisplayName> $displayName
     */
    #[JsonProperty('displayName')]
    public ?string $displayName;

    /**
     * @var ?value-of<GrantsCreateRequestVisitorIdentityFieldsEmail> $email
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?value-of<GrantsCreateRequestVisitorIdentityFieldsTitle> $title
     */
    #[JsonProperty('title')]
    public ?string $title;

    /**
     * @var ?value-of<GrantsCreateRequestVisitorIdentityFieldsOrganization> $organization
     */
    #[JsonProperty('organization')]
    public ?string $organization;

    /**
     * @var ?value-of<GrantsCreateRequestVisitorIdentityFieldsOrganizationalUnit> $organizationalUnit
     */
    #[JsonProperty('organizationalUnit')]
    public ?string $organizationalUnit;

    /**
     * @param array{
     *   displayName?: ?value-of<GrantsCreateRequestVisitorIdentityFieldsDisplayName>,
     *   email?: ?value-of<GrantsCreateRequestVisitorIdentityFieldsEmail>,
     *   title?: ?value-of<GrantsCreateRequestVisitorIdentityFieldsTitle>,
     *   organization?: ?value-of<GrantsCreateRequestVisitorIdentityFieldsOrganization>,
     *   organizationalUnit?: ?value-of<GrantsCreateRequestVisitorIdentityFieldsOrganizationalUnit>,
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
