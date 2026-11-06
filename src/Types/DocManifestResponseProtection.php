<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocManifestResponseProtection extends JsonSerializableType
{
    /**
     * @var ?value-of<DocManifestResponseProtectionEnforced> $enforced
     */
    #[JsonProperty('enforced')]
    public ?string $enforced;

    /**
     * @var ?value-of<DocManifestResponseProtectionJudged> $judged
     */
    #[JsonProperty('judged')]
    public ?string $judged;

    /**
     * @var ?DocManifestResponseProtectionCertification $certification
     */
    #[JsonProperty('certification')]
    public ?DocManifestResponseProtectionCertification $certification;

    /**
     * @var array<DocManifestResponseProtectionFieldLocksItem> $fieldLocks
     */
    #[JsonProperty('fieldLocks'), ArrayType([DocManifestResponseProtectionFieldLocksItem::class])]
    public array $fieldLocks;

    /**
     * @var int $policyVersion
     */
    #[JsonProperty('policyVersion')]
    public int $policyVersion;

    /**
     * @param array{
     *   fieldLocks: array<DocManifestResponseProtectionFieldLocksItem>,
     *   policyVersion: int,
     *   enforced?: ?value-of<DocManifestResponseProtectionEnforced>,
     *   judged?: ?value-of<DocManifestResponseProtectionJudged>,
     *   certification?: ?DocManifestResponseProtectionCertification,
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
