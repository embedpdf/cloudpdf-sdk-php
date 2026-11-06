<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocSignaturesListResponse extends JsonSerializableType
{
    /**
     * @var bool $chainValid
     */
    #[JsonProperty('chainValid')]
    public bool $chainValid;

    /**
     * @var array<DocSignaturesListResponseRevisionsItem> $revisions
     */
    #[JsonProperty('revisions'), ArrayType([DocSignaturesListResponseRevisionsItem::class])]
    public array $revisions;

    /**
     * @var array<DocSignaturesListResponseSignaturesItem> $signatures
     */
    #[JsonProperty('signatures'), ArrayType([DocSignaturesListResponseSignaturesItem::class])]
    public array $signatures;

    /**
     * @var DocSignaturesListResponseProtection $protection
     */
    #[JsonProperty('protection')]
    public DocSignaturesListResponseProtection $protection;

    /**
     * @param array{
     *   chainValid: bool,
     *   revisions: array<DocSignaturesListResponseRevisionsItem>,
     *   signatures: array<DocSignaturesListResponseSignaturesItem>,
     *   protection: DocSignaturesListResponseProtection,
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
