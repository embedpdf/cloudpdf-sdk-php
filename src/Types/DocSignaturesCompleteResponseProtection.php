<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocSignaturesCompleteResponseProtection extends JsonSerializableType
{
    /**
     * @var ?value-of<DocSignaturesCompleteResponseProtectionEnforced> $enforced
     */
    #[JsonProperty('enforced')]
    public ?string $enforced;

    /**
     * @var ?value-of<DocSignaturesCompleteResponseProtectionJudged> $judged
     */
    #[JsonProperty('judged')]
    public ?string $judged;

    /**
     * @var ?DocSignaturesCompleteResponseProtectionCertification $certification
     */
    #[JsonProperty('certification')]
    public ?DocSignaturesCompleteResponseProtectionCertification $certification;

    /**
     * @var array<DocSignaturesCompleteResponseProtectionFieldLocksItem> $fieldLocks
     */
    #[JsonProperty('fieldLocks'), ArrayType([DocSignaturesCompleteResponseProtectionFieldLocksItem::class])]
    public array $fieldLocks;

    /**
     * @var int $policyVersion
     */
    #[JsonProperty('policyVersion')]
    public int $policyVersion;

    /**
     * @param array{
     *   fieldLocks: array<DocSignaturesCompleteResponseProtectionFieldLocksItem>,
     *   policyVersion: int,
     *   enforced?: ?value-of<DocSignaturesCompleteResponseProtectionEnforced>,
     *   judged?: ?value-of<DocSignaturesCompleteResponseProtectionJudged>,
     *   certification?: ?DocSignaturesCompleteResponseProtectionCertification,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->enforced = $values['enforced'] ?? null;
        $this->judged = $values['judged'] ?? null;
        $this->certification = $values['certification'] ?? null;
        $this->fieldLocks = $values['fieldLocks'];
        $this->policyVersion = $values['policyVersion'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
