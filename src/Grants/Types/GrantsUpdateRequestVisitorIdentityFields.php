<?php

namespace CloudPDF\Grants\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class GrantsUpdateRequestVisitorIdentityFields extends JsonSerializableType
{
    /**
     * @var ?value-of<GrantsUpdateRequestVisitorIdentityFieldsDisplayName> $displayName
     */
    #[JsonProperty('displayName')]
    public ?string $displayName;

    /**
     * @var ?value-of<GrantsUpdateRequestVisitorIdentityFieldsEmail> $email
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?value-of<GrantsUpdateRequestVisitorIdentityFieldsTitle> $title
     */
    #[JsonProperty('title')]
    public ?string $title;

    /**
     * @var ?value-of<GrantsUpdateRequestVisitorIdentityFieldsOrganization> $organization
     */
    #[JsonProperty('organization')]
    public ?string $organization;

    /**
     * @var ?value-of<GrantsUpdateRequestVisitorIdentityFieldsOrganizationalUnit> $organizationalUnit
     */
    #[JsonProperty('organizationalUnit')]
    public ?string $organizationalUnit;

    /**
     * @param array{
     *   displayName?: ?value-of<GrantsUpdateRequestVisitorIdentityFieldsDisplayName>,
     *   email?: ?value-of<GrantsUpdateRequestVisitorIdentityFieldsEmail>,
     *   title?: ?value-of<GrantsUpdateRequestVisitorIdentityFieldsTitle>,
     *   organization?: ?value-of<GrantsUpdateRequestVisitorIdentityFieldsOrganization>,
     *   organizationalUnit?: ?value-of<GrantsUpdateRequestVisitorIdentityFieldsOrganizationalUnit>,
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
