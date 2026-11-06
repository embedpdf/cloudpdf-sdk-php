<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocPagesSetNameResponseLayout extends JsonSerializableType
{
    /**
     * @var int $pageCount
     */
    #[JsonProperty('pageCount')]
    public int $pageCount;

    /**
     * @var array<DocPagesSetNameResponseLayoutPagesItem> $pages
     */
    #[JsonProperty('pages'), ArrayType([DocPagesSetNameResponseLayoutPagesItem::class])]
    public array $pages;

    /**
     * @var array<DocPagesSetNameResponseLayoutLabelsItem> $labels
     */
    #[JsonProperty('labels'), ArrayType([DocPagesSetNameResponseLayoutLabelsItem::class])]
    public array $labels;

    /**
     * @var array<DocPagesSetNameResponseLayoutNamedPagesItem> $namedPages
     */
    #[JsonProperty('namedPages'), ArrayType([DocPagesSetNameResponseLayoutNamedPagesItem::class])]
    public array $namedPages;

    /**
     * @param array{
     *   pageCount: int,
     *   pages: array<DocPagesSetNameResponseLayoutPagesItem>,
     *   labels: array<DocPagesSetNameResponseLayoutLabelsItem>,
     *   namedPages: array<DocPagesSetNameResponseLayoutNamedPagesItem>,
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
