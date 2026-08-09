<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class TokensIssueRequestDoc extends JsonSerializableType
{
    /**
     * @var string $sub
     */
    #[JsonProperty('sub')]
    public string $sub;

    /**
     * @var string $docId
     */
    #[JsonProperty('docId')]
    public string $docId;

    /**
     * @var ?string $layerName
     */
    #[JsonProperty('layerName')]
    public ?string $layerName;

    /**
     * @var array<string> $scope
     */
    #[JsonProperty('scope'), ArrayType(['string'])]
    public array $scope;

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
     * @var ?string $groupId
     */
    #[JsonProperty('groupId')]
    public ?string $groupId;

    /**
     * @var ?array<string> $groups
     */
    #[JsonProperty('groups'), ArrayType(['string'])]
    public ?array $groups;

    /**
     * @var int $expiresIn
     */
    #[JsonProperty('expiresIn')]
    public int $expiresIn;

    /**
     * @param array{
     *   sub: string,
     *   docId: string,
     *   scope: array<string>,
     *   expiresIn: int,
     *   layerName?: ?string,
     *   userId?: ?string,
     *   displayName?: ?string,
     *   groupId?: ?string,
     *   groups?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->sub = $values['sub'];
        $this->docId = $values['docId'];
        $this->layerName = $values['layerName'] ?? null;
        $this->scope = $values['scope'];
        $this->userId = $values['userId'] ?? null;
        $this->displayName = $values['displayName'] ?? null;
        $this->groupId = $values['groupId'] ?? null;
        $this->groups = $values['groups'] ?? null;
        $this->expiresIn = $values['expiresIn'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
