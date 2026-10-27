<?php

namespace CloudPDF\Shares\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class SharesUpdateRequestVisitorIdentityFields extends JsonSerializableType
{
    /**
     * @var ?value-of<SharesUpdateRequestVisitorIdentityFieldsDisplayName> $displayName
     */
    #[JsonProperty('displayName')]
    public ?string $displayName;

    /**
     * @var ?value-of<SharesUpdateRequestVisitorIdentityFieldsEmail> $email
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?value-of<SharesUpdateRequestVisitorIdentityFieldsTitle> $title
     */
    #[JsonProperty('title')]
    public ?string $title;

    /**
     * @var ?value-of<SharesUpdateRequestVisitorIdentityFieldsOrganization> $organization
     */
    #[JsonProperty('organization')]
    public ?string $organization;

    /**
     * @var ?value-of<SharesUpdateRequestVisitorIdentityFieldsOrganizationalUnit> $organizationalUnit
     */
    #[JsonProperty('organizationalUnit')]
    public ?string $organizationalUnit;

    /**
     * @param array{
     *   displayName?: ?value-of<SharesUpdateRequestVisitorIdentityFieldsDisplayName>,
     *   email?: ?value-of<SharesUpdateRequestVisitorIdentityFieldsEmail>,
     *   title?: ?value-of<SharesUpdateRequestVisitorIdentityFieldsTitle>,
     *   organization?: ?value-of<SharesUpdateRequestVisitorIdentityFieldsOrganization>,
     *   organizationalUnit?: ?value-of<SharesUpdateRequestVisitorIdentityFieldsOrganizationalUnit>,
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
