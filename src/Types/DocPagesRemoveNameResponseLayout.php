<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocPagesRemoveNameResponseLayout extends JsonSerializableType
{
    /**
     * @var int $pageCount
     */
    #[JsonProperty('pageCount')]
    public int $pageCount;

    /**
     * @var array<DocPagesRemoveNameResponseLayoutPagesItem> $pages
     */
    #[JsonProperty('pages'), ArrayType([DocPagesRemoveNameResponseLayoutPagesItem::class])]
    public array $pages;

    /**
     * @var array<DocPagesRemoveNameResponseLayoutLabelsItem> $labels
     */
    #[JsonProperty('labels'), ArrayType([DocPagesRemoveNameResponseLayoutLabelsItem::class])]
    public array $labels;

    /**
     * @var array<DocPagesRemoveNameResponseLayoutNamedPagesItem> $namedPages
     */
    #[JsonProperty('namedPages'), ArrayType([DocPagesRemoveNameResponseLayoutNamedPagesItem::class])]
    public array $namedPages;

    /**
     * @param array{
     *   pageCount: int,
     *   pages: array<DocPagesRemoveNameResponseLayoutPagesItem>,
     *   labels: array<DocPagesRemoveNameResponseLayoutLabelsItem>,
     *   namedPages: array<DocPagesRemoveNameResponseLayoutNamedPagesItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->pageCount = $values['pageCount'];
        $this->pages = $values['pages'];
        $this->labels = $values['labels'];
        $this->namedPages = $values['namedPages'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
