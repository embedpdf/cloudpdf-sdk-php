<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocManifest200ResponseProtection extends JsonSerializableType
{
    /**
     * @var ?value-of<DocManifest200ResponseProtectionEnforced> $enforced
     */
    #[JsonProperty('enforced')]
    public ?string $enforced;

    /**
     * @var ?value-of<DocManifest200ResponseProtectionJudged> $judged
     */
    #[JsonProperty('judged')]
    public ?string $judged;

    /**
     * @var ?DocManifest200ResponseProtectionCertification $certification
     */
    #[JsonProperty('certification')]
    public ?DocManifest200ResponseProtectionCertification $certification;

    /**
     * @var array<DocManifest200ResponseProtectionFieldLocksItem> $fieldLocks
     */
    #[JsonProperty('fieldLocks'), ArrayType([DocManifest200ResponseProtectionFieldLocksItem::class])]
    public array $fieldLocks;

    /**
     * @var int $policyVersion
     */
    #[JsonProperty('policyVersion')]
    public int $policyVersion;

    /**
     * @param array{
     *   fieldLocks: array<DocManifest200ResponseProtectionFieldLocksItem>,
     *   policyVersion: int,
     *   enforced?: ?value-of<DocManifest200ResponseProtectionEnforced>,
     *   judged?: ?value-of<DocManifest200ResponseProtectionJudged>,
     *   certification?: ?DocManifest200ResponseProtectionCertification,
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
