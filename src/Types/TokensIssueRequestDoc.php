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
     * @var ?Identity $identity
     */
    #[JsonProperty('identity')]
    public ?Identity $identity;

    /**
     * @var ?array<string> $origins
     */
    #[JsonProperty('origins'), ArrayType(['string'])]
    public ?array $origins;

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
     *   identity?: ?Identity,
     *   origins?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->sub = $values['sub'];
        $this->docId = $values['docId'];
        $this->layerName = $values['layerName'] ?? null;
        $this->scope = $values['scope'];
        $this->identity = $values['identity'] ?? null;
        $this->origins = $values['origins'] ?? null;
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
