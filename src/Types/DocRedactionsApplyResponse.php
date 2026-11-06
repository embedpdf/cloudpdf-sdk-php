<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocRedactionsApplyResponse extends JsonSerializableType
{
    /**
     * @var DocRedactionsApplyResponseScope $scope
     */
    #[JsonProperty('scope')]
    public DocRedactionsApplyResponseScope $scope;

    /**
     * @var array<DocRedactionsApplyResponseResultsItem> $results
     */
    #[JsonProperty('results'), ArrayType([DocRedactionsApplyResponseResultsItem::class])]
    public array $results;

    /**
     * @var int $removedAnnotationCount
     */
    #[JsonProperty('removedAnnotationCount')]
    public int $removedAnnotationCount;

    /**
     * @var MutationMeta $meta
     */
    #[JsonProperty('meta')]
    public MutationMeta $meta;

    /**
     * @param array{
     *   scope: DocRedactionsApplyResponseScope,
     *   results: array<DocRedactionsApplyResponseResultsItem>,
     *   removedAnnotationCount: int,
     *   meta: MutationMeta,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->scope = $values['scope'];
        $this->results = $values['results'];
        $this->removedAnnotationCount = $values['removedAnnotationCount'];
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
