<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class SharesCreate200ResponseShareVisitorIdentityFields extends JsonSerializableType
{
    /**
     * @var ?value-of<SharesCreate200ResponseShareVisitorIdentityFieldsDisplayName> $displayName
     */
    #[JsonProperty('displayName')]
    public ?string $displayName;

    /**
     * @var ?value-of<SharesCreate200ResponseShareVisitorIdentityFieldsEmail> $email
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?value-of<SharesCreate200ResponseShareVisitorIdentityFieldsTitle> $title
     */
    #[JsonProperty('title')]
    public ?string $title;

    /**
     * @var ?value-of<SharesCreate200ResponseShareVisitorIdentityFieldsOrganization> $organization
     */
    #[JsonProperty('organization')]
    public ?string $organization;

    /**
     * @var ?value-of<SharesCreate200ResponseShareVisitorIdentityFieldsOrganizationalUnit> $organizationalUnit
     */
    #[JsonProperty('organizationalUnit')]
    public ?string $organizationalUnit;

    /**
     * @param array{
     *   displayName?: ?value-of<SharesCreate200ResponseShareVisitorIdentityFieldsDisplayName>,
     *   email?: ?value-of<SharesCreate200ResponseShareVisitorIdentityFieldsEmail>,
     *   title?: ?value-of<SharesCreate200ResponseShareVisitorIdentityFieldsTitle>,
     *   organization?: ?value-of<SharesCreate200ResponseShareVisitorIdentityFieldsOrganization>,
     *   organizationalUnit?: ?value-of<SharesCreate200ResponseShareVisitorIdentityFieldsOrganizationalUnit>,
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
