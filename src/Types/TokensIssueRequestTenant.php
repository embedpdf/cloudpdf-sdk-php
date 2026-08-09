<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class TokensIssueRequestTenant extends JsonSerializableType
{
    /**
     * @var string $sub
     */
    #[JsonProperty('sub')]
    public string $sub;

    /**
     * @var array<(
     *    value-of<TokensIssueRequestTenantScopeItemZero>
     *   |value-of<TokensIssueRequestTenantScopeItemOne>
     * )> $scope
     */
    #[JsonProperty('scope'), ArrayType(['string'])]
    public array $scope;

    /**
     * @var int $expiresIn
     */
    #[JsonProperty('expiresIn')]
    public int $expiresIn;

    /**
     * @param array{
     *   sub: string,
     *   scope: array<(
     *    value-of<TokensIssueRequestTenantScopeItemZero>
     *   |value-of<TokensIssueRequestTenantScopeItemOne>
     * )>,
     *   expiresIn: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->sub = $values['sub'];
        $this->scope = $values['scope'];
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
