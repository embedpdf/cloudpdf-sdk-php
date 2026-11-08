<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class ChangeItemPagesSetScale extends JsonSerializableType
{
    /**
     * @var array<PageRef> $pages
     */
    #[JsonProperty('pages'), ArrayType([PageRef::class])]
    public array $pages;

    /**
     * @var ?ChangeItemPagesSetScaleMeasure $measure
     */
    #[JsonProperty('measure')]
    public ?ChangeItemPagesSetScaleMeasure $measure;

    /**
     * @var PageRef $page
     */
    #[JsonProperty('page')]
    public PageRef $page;

    /**
     * @var PageListSnapshot $layout
     */
    #[JsonProperty('layout')]
    public PageListSnapshot $layout;

    /**
     * @var MutationMeta $meta
     */
    #[JsonProperty('meta')]
    public MutationMeta $meta;

    /**
     * @param array{
     *   pages: array<PageRef>,
     *   page: PageRef,
     *   layout: PageListSnapshot,
     *   meta: MutationMeta,
     *   measure?: ?ChangeItemPagesSetScaleMeasure,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->pages = $values['pages'];
        $this->measure = $values['measure'] ?? null;
        $this->page = $values['page'];
        $this->layout = $values['layout'];
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
