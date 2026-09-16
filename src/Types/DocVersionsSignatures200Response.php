<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocVersionsSignatures200Response extends JsonSerializableType
{
    /**
     * @var bool $chainValid
     */
    #[JsonProperty('chainValid')]
    public bool $chainValid;

    /**
     * @var array<DocVersionsSignatures200ResponseRevisionsItem> $revisions
     */
    #[JsonProperty('revisions'), ArrayType([DocVersionsSignatures200ResponseRevisionsItem::class])]
    public array $revisions;

    /**
     * @var array<DocVersionsSignatures200ResponseSignaturesItem> $signatures
     */
    #[JsonProperty('signatures'), ArrayType([DocVersionsSignatures200ResponseSignaturesItem::class])]
    public array $signatures;

    /**
     * @var DocVersionsSignatures200ResponseProtection $protection
     */
    #[JsonProperty('protection')]
    public DocVersionsSignatures200ResponseProtection $protection;

    /**
     * @param array{
     *   chainValid: bool,
     *   revisions: array<DocVersionsSignatures200ResponseRevisionsItem>,
     *   signatures: array<DocVersionsSignatures200ResponseSignaturesItem>,
     *   protection: DocVersionsSignatures200ResponseProtection,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->chainValid = $values['chainValid'];
        $this->revisions = $values['revisions'];
        $this->signatures = $values['signatures'];
        $this->protection = $values['protection'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
