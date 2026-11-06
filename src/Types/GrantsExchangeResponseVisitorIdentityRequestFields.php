<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class GrantsExchangeResponseVisitorIdentityRequestFields extends JsonSerializableType
{
    /**
     * @var ?value-of<GrantsExchangeResponseVisitorIdentityRequestFieldsDisplayName> $displayName
     */
    #[JsonProperty('displayName')]
    public ?string $displayName;

    /**
     * @var ?value-of<GrantsExchangeResponseVisitorIdentityRequestFieldsEmail> $email
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?value-of<GrantsExchangeResponseVisitorIdentityRequestFieldsTitle> $title
     */
    #[JsonProperty('title')]
    public ?string $title;

    /**
     * @var ?value-of<GrantsExchangeResponseVisitorIdentityRequestFieldsOrganization> $organization
     */
    #[JsonProperty('organization')]
    public ?string $organization;

    /**
     * @var ?value-of<GrantsExchangeResponseVisitorIdentityRequestFieldsOrganizationalUnit> $organizationalUnit
     */
    #[JsonProperty('organizationalUnit')]
    public ?string $organizationalUnit;

    /**
     * @param array{
     *   displayName?: ?value-of<GrantsExchangeResponseVisitorIdentityRequestFieldsDisplayName>,
     *   email?: ?value-of<GrantsExchangeResponseVisitorIdentityRequestFieldsEmail>,
     *   title?: ?value-of<GrantsExchangeResponseVisitorIdentityRequestFieldsTitle>,
     *   organization?: ?value-of<GrantsExchangeResponseVisitorIdentityRequestFieldsOrganization>,
     *   organizationalUnit?: ?value-of<GrantsExchangeResponseVisitorIdentityRequestFieldsOrganizationalUnit>,
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
