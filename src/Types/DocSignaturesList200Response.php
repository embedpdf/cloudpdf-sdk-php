<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocSignaturesList200Response extends JsonSerializableType
{
    /**
     * @var bool $chainValid
     */
    #[JsonProperty('chainValid')]
    public bool $chainValid;

    /**
     * @var array<DocSignaturesList200ResponseRevisionsItem> $revisions
     */
    #[JsonProperty('revisions'), ArrayType([DocSignaturesList200ResponseRevisionsItem::class])]
    public array $revisions;

    /**
     * @var array<DocSignaturesList200ResponseSignaturesItem> $signatures
     */
    #[JsonProperty('signatures'), ArrayType([DocSignaturesList200ResponseSignaturesItem::class])]
    public array $signatures;

    /**
     * @var DocSignaturesList200ResponseProtection $protection
     */
    #[JsonProperty('protection')]
    public DocSignaturesList200ResponseProtection $protection;

    /**
     * @param array{
     *   chainValid: bool,
     *   revisions: array<DocSignaturesList200ResponseRevisionsItem>,
     *   signatures: array<DocSignaturesList200ResponseSignaturesItem>,
     *   protection: DocSignaturesList200ResponseProtection,
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
