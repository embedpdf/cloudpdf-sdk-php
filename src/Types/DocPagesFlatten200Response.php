<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocPagesFlatten200Response extends JsonSerializableType
{
    /**
     * @var array<PageRef> $pages
     */
    #[JsonProperty('pages'), ArrayType([PageRef::class])]
    public array $pages;

    /**
     * @var value-of<DocPagesFlatten200ResponseUsage> $usage
     */
    #[JsonProperty('usage')]
    public string $usage;

    /**
     * @var array<DocPagesFlatten200ResponseResultsItem> $results
     */
    #[JsonProperty('results'), ArrayType([DocPagesFlatten200ResponseResultsItem::class])]
    public array $results;

    /**
     * @var MutationMeta $meta
     */
    #[JsonProperty('meta')]
    public MutationMeta $meta;

    /**
     * @param array{
     *   pages: array<PageRef>,
     *   usage: value-of<DocPagesFlatten200ResponseUsage>,
     *   results: array<DocPagesFlatten200ResponseResultsItem>,
     *   meta: MutationMeta,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->pages = $values['pages'];
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
