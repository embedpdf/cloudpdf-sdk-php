<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocSignaturesList200ResponseProtection extends JsonSerializableType
{
    /**
     * @var ?value-of<DocSignaturesList200ResponseProtectionEnforced> $enforced
     */
    #[JsonProperty('enforced')]
    public ?string $enforced;

    /**
     * @var ?value-of<DocSignaturesList200ResponseProtectionJudged> $judged
     */
    #[JsonProperty('judged')]
    public ?string $judged;

    /**
     * @var ?DocSignaturesList200ResponseProtectionCertification $certification
     */
    #[JsonProperty('certification')]
    public ?DocSignaturesList200ResponseProtectionCertification $certification;

    /**
     * @var array<DocSignaturesList200ResponseProtectionFieldLocksItem> $fieldLocks
     */
    #[JsonProperty('fieldLocks'), ArrayType([DocSignaturesList200ResponseProtectionFieldLocksItem::class])]
    public array $fieldLocks;

    /**
     * @var int $policyVersion
     */
    #[JsonProperty('policyVersion')]
    public int $policyVersion;

    /**
     * @param array{
     *   fieldLocks: array<DocSignaturesList200ResponseProtectionFieldLocksItem>,
     *   policyVersion: int,
     *   enforced?: ?value-of<DocSignaturesList200ResponseProtectionEnforced>,
     *   judged?: ?value-of<DocSignaturesList200ResponseProtectionJudged>,
     *   certification?: ?DocSignaturesList200ResponseProtectionCertification,
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
