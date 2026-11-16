<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocSignaturesAddValidationInfoResponse extends JsonSerializableType
{
    /**
     * @var DocSignaturesAddValidationInfoResponseAdded $added
     */
    #[JsonProperty('added')]
    public DocSignaturesAddValidationInfoResponseAdded $added;

    /**
     * @var MutationMeta $meta
     */
    #[JsonProperty('meta')]
    public MutationMeta $meta;

    /**
     * @param array{
     *   added: DocSignaturesAddValidationInfoResponseAdded,
     *   meta: MutationMeta,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->added = $values['added'];
        $this->meta = $values['meta'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
