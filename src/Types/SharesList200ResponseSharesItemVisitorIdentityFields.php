<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class SharesList200ResponseSharesItemVisitorIdentityFields extends JsonSerializableType
{
    /**
     * @var ?value-of<SharesList200ResponseSharesItemVisitorIdentityFieldsDisplayName> $displayName
     */
    #[JsonProperty('displayName')]
    public ?string $displayName;

    /**
     * @var ?value-of<SharesList200ResponseSharesItemVisitorIdentityFieldsEmail> $email
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?value-of<SharesList200ResponseSharesItemVisitorIdentityFieldsTitle> $title
     */
    #[JsonProperty('title')]
    public ?string $title;

    /**
     * @var ?value-of<SharesList200ResponseSharesItemVisitorIdentityFieldsOrganization> $organization
     */
    #[JsonProperty('organization')]
    public ?string $organization;

    /**
     * @var ?value-of<SharesList200ResponseSharesItemVisitorIdentityFieldsOrganizationalUnit> $organizationalUnit
     */
    #[JsonProperty('organizationalUnit')]
    public ?string $organizationalUnit;

    /**
     * @param array{
     *   displayName?: ?value-of<SharesList200ResponseSharesItemVisitorIdentityFieldsDisplayName>,
     *   email?: ?value-of<SharesList200ResponseSharesItemVisitorIdentityFieldsEmail>,
     *   title?: ?value-of<SharesList200ResponseSharesItemVisitorIdentityFieldsTitle>,
     *   organization?: ?value-of<SharesList200ResponseSharesItemVisitorIdentityFieldsOrganization>,
     *   organizationalUnit?: ?value-of<SharesList200ResponseSharesItemVisitorIdentityFieldsOrganizationalUnit>,
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
