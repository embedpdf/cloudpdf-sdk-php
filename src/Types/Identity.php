<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class Identity extends JsonSerializableType
{
    /**
     * @var ?string $userId
     */
    #[JsonProperty('userId')]
    public ?string $userId;

    /**
     * @var ?string $displayName
     */
    #[JsonProperty('displayName')]
    public ?string $displayName;

    /**
     * @var ?string $email
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?string $title
     */
    #[JsonProperty('title')]
    public ?string $title;

    /**
     * @var ?string $organization
     */
    #[JsonProperty('organization')]
    public ?string $organization;

    /**
     * @var ?string $organizationalUnit
     */
    #[JsonProperty('organizationalUnit')]
    public ?string $organizationalUnit;

    /**
     * @var ?string $groupId
     */
    #[JsonProperty('groupId')]
    public ?string $groupId;

    /**
     * @param array{
     *   userId?: ?string,
     *   displayName?: ?string,
     *   email?: ?string,
     *   title?: ?string,
     *   organization?: ?string,
     *   organizationalUnit?: ?string,
     *   groupId?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->userId = $values['userId'] ?? null;
        $this->displayName = $values['displayName'] ?? null;
        $this->email = $values['email'] ?? null;
        $this->title = $values['title'] ?? null;
        $this->organization = $values['organization'] ?? null;
        $this->organizationalUnit = $values['organizationalUnit'] ?? null;
        $this->groupId = $values['groupId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
