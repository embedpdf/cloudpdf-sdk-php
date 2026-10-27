<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class SharesExchange200ResponseVisitorIdentityRequestFields extends JsonSerializableType
{
    /**
     * @var ?value-of<SharesExchange200ResponseVisitorIdentityRequestFieldsDisplayName> $displayName
     */
    #[JsonProperty('displayName')]
    public ?string $displayName;

    /**
     * @var ?value-of<SharesExchange200ResponseVisitorIdentityRequestFieldsEmail> $email
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?value-of<SharesExchange200ResponseVisitorIdentityRequestFieldsTitle> $title
     */
    #[JsonProperty('title')]
    public ?string $title;

    /**
     * @var ?value-of<SharesExchange200ResponseVisitorIdentityRequestFieldsOrganization> $organization
     */
    #[JsonProperty('organization')]
    public ?string $organization;

    /**
     * @var ?value-of<SharesExchange200ResponseVisitorIdentityRequestFieldsOrganizationalUnit> $organizationalUnit
     */
    #[JsonProperty('organizationalUnit')]
    public ?string $organizationalUnit;

    /**
     * @param array{
     *   displayName?: ?value-of<SharesExchange200ResponseVisitorIdentityRequestFieldsDisplayName>,
     *   email?: ?value-of<SharesExchange200ResponseVisitorIdentityRequestFieldsEmail>,
     *   title?: ?value-of<SharesExchange200ResponseVisitorIdentityRequestFieldsTitle>,
     *   organization?: ?value-of<SharesExchange200ResponseVisitorIdentityRequestFieldsOrganization>,
     *   organizationalUnit?: ?value-of<SharesExchange200ResponseVisitorIdentityRequestFieldsOrganizationalUnit>,
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
