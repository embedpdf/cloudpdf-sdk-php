<?php

namespace CloudPDF\Shares\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class SharesCreateRequestVisitorIdentityFields extends JsonSerializableType
{
    /**
     * @var ?value-of<SharesCreateRequestVisitorIdentityFieldsDisplayName> $displayName
     */
    #[JsonProperty('displayName')]
    public ?string $displayName;

    /**
     * @var ?value-of<SharesCreateRequestVisitorIdentityFieldsEmail> $email
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?value-of<SharesCreateRequestVisitorIdentityFieldsTitle> $title
     */
    #[JsonProperty('title')]
    public ?string $title;

    /**
     * @var ?value-of<SharesCreateRequestVisitorIdentityFieldsOrganization> $organization
     */
    #[JsonProperty('organization')]
    public ?string $organization;

    /**
     * @var ?value-of<SharesCreateRequestVisitorIdentityFieldsOrganizationalUnit> $organizationalUnit
     */
    #[JsonProperty('organizationalUnit')]
    public ?string $organizationalUnit;

    /**
     * @param array{
     *   displayName?: ?value-of<SharesCreateRequestVisitorIdentityFieldsDisplayName>,
     *   email?: ?value-of<SharesCreateRequestVisitorIdentityFieldsEmail>,
     *   title?: ?value-of<SharesCreateRequestVisitorIdentityFieldsTitle>,
     *   organization?: ?value-of<SharesCreateRequestVisitorIdentityFieldsOrganization>,
     *   organizationalUnit?: ?value-of<SharesCreateRequestVisitorIdentityFieldsOrganizationalUnit>,
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
