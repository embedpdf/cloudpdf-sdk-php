<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocAnnotationsFlatten200Response extends JsonSerializableType
{
    /**
     * @var PageRef $page
     */
    #[JsonProperty('page')]
    public PageRef $page;

    /**
     * @var value-of<DocAnnotationsFlatten200ResponseUsage> $usage
     */
    #[JsonProperty('usage')]
    public string $usage;

    /**
     * @var array<DocAnnotationsFlatten200ResponseResultsItem> $results
     */
    #[JsonProperty('results'), ArrayType([DocAnnotationsFlatten200ResponseResultsItem::class])]
    public array $results;

    /**
     * @var MutationMeta $meta
     */
    #[JsonProperty('meta')]
    public MutationMeta $meta;

    /**
     * @param array{
     *   page: PageRef,
     *   usage: value-of<DocAnnotationsFlatten200ResponseUsage>,
     *   results: array<DocAnnotationsFlatten200ResponseResultsItem>,
     *   meta: MutationMeta,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->page = $values['page'];
        $this->usage = $values['usage'];
        $this->results = $values['results'];
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
