<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocVersionsSignaturesResponse extends JsonSerializableType
{
    /**
     * @var bool $chainValid
     */
    #[JsonProperty('chainValid')]
    public bool $chainValid;

    /**
     * @var array<DocVersionsSignaturesResponseRevisionsItem> $revisions
     */
    #[JsonProperty('revisions'), ArrayType([DocVersionsSignaturesResponseRevisionsItem::class])]
    public array $revisions;

    /**
     * @var array<DocVersionsSignaturesResponseSignaturesItem> $signatures
     */
    #[JsonProperty('signatures'), ArrayType([DocVersionsSignaturesResponseSignaturesItem::class])]
    public array $signatures;

    /**
     * @var DocVersionsSignaturesResponseProtection $protection
     */
    #[JsonProperty('protection')]
    public DocVersionsSignaturesResponseProtection $protection;

    /**
     * @param array{
     *   chainValid: bool,
     *   revisions: array<DocVersionsSignaturesResponseRevisionsItem>,
     *   signatures: array<DocVersionsSignaturesResponseSignaturesItem>,
     *   protection: DocVersionsSignaturesResponseProtection,
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
