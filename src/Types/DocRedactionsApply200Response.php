<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocRedactionsApply200Response extends JsonSerializableType
{
    /**
     * @var DocRedactionsApply200ResponseScope $scope
     */
    #[JsonProperty('scope')]
    public DocRedactionsApply200ResponseScope $scope;

    /**
     * @var array<DocRedactionsApply200ResponseResultsItem> $results
     */
    #[JsonProperty('results'), ArrayType([DocRedactionsApply200ResponseResultsItem::class])]
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
     *   scope: DocRedactionsApply200ResponseScope,
     *   results: array<DocRedactionsApply200ResponseResultsItem>,
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
