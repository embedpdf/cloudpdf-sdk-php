<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocAnnotationsFlattenResponse extends JsonSerializableType
{
    /**
     * @var PageRef $page
     */
    #[JsonProperty('page')]
    public PageRef $page;

    /**
     * @var value-of<DocAnnotationsFlattenResponseUsage> $usage
     */
    #[JsonProperty('usage')]
    public string $usage;

    /**
     * @var array<DocAnnotationsFlattenResponseResultsItem> $results
     */
    #[JsonProperty('results'), ArrayType([DocAnnotationsFlattenResponseResultsItem::class])]
    public array $results;

    /**
     * @var MutationMeta $meta
     */
    #[JsonProperty('meta')]
    public MutationMeta $meta;

    /**
     * @param array{
     *   page: PageRef,
     *   usage: value-of<DocAnnotationsFlattenResponseUsage>,
     *   results: array<DocAnnotationsFlattenResponseResultsItem>,
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
