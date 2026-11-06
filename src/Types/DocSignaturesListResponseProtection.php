<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocSignaturesListResponseProtection extends JsonSerializableType
{
    /**
     * @var ?value-of<DocSignaturesListResponseProtectionEnforced> $enforced
     */
    #[JsonProperty('enforced')]
    public ?string $enforced;

    /**
     * @var ?value-of<DocSignaturesListResponseProtectionJudged> $judged
     */
    #[JsonProperty('judged')]
    public ?string $judged;

    /**
     * @var ?DocSignaturesListResponseProtectionCertification $certification
     */
    #[JsonProperty('certification')]
    public ?DocSignaturesListResponseProtectionCertification $certification;

    /**
     * @var array<DocSignaturesListResponseProtectionFieldLocksItem> $fieldLocks
     */
    #[JsonProperty('fieldLocks'), ArrayType([DocSignaturesListResponseProtectionFieldLocksItem::class])]
    public array $fieldLocks;

    /**
     * @var int $policyVersion
     */
    #[JsonProperty('policyVersion')]
    public int $policyVersion;

    /**
     * @param array{
     *   fieldLocks: array<DocSignaturesListResponseProtectionFieldLocksItem>,
     *   policyVersion: int,
     *   enforced?: ?value-of<DocSignaturesListResponseProtectionEnforced>,
     *   judged?: ?value-of<DocSignaturesListResponseProtectionJudged>,
     *   certification?: ?DocSignaturesListResponseProtectionCertification,
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
