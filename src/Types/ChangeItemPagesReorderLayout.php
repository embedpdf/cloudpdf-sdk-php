<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class ChangeItemPagesReorderLayout extends JsonSerializableType
{
    /**
     * @var int $pageCount
     */
    #[JsonProperty('pageCount')]
    public int $pageCount;

    /**
     * @var array<ChangeItemPagesReorderLayoutPagesItem> $pages
     */
    #[JsonProperty('pages'), ArrayType([ChangeItemPagesReorderLayoutPagesItem::class])]
    public array $pages;

    /**
     * @var array<ChangeItemPagesReorderLayoutLabelsItem> $labels
     */
    #[JsonProperty('labels'), ArrayType([ChangeItemPagesReorderLayoutLabelsItem::class])]
    public array $labels;

    /**
     * @var array<ChangeItemPagesReorderLayoutNamedPagesItem> $namedPages
     */
    #[JsonProperty('namedPages'), ArrayType([ChangeItemPagesReorderLayoutNamedPagesItem::class])]
    public array $namedPages;

    /**
     * @param array{
     *   pageCount: int,
     *   pages: array<ChangeItemPagesReorderLayoutPagesItem>,
     *   labels: array<ChangeItemPagesReorderLayoutLabelsItem>,
     *   namedPages: array<ChangeItemPagesReorderLayoutNamedPagesItem>,
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
