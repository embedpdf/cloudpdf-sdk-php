<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class ChangeItemPagesRestoreLayout extends JsonSerializableType
{
    /**
     * @var int $pageCount
     */
    #[JsonProperty('pageCount')]
    public int $pageCount;

    /**
     * @var array<ChangeItemPagesRestoreLayoutPagesItem> $pages
     */
    #[JsonProperty('pages'), ArrayType([ChangeItemPagesRestoreLayoutPagesItem::class])]
    public array $pages;

    /**
     * @var array<ChangeItemPagesRestoreLayoutLabelsItem> $labels
     */
    #[JsonProperty('labels'), ArrayType([ChangeItemPagesRestoreLayoutLabelsItem::class])]
    public array $labels;

    /**
     * @var array<ChangeItemPagesRestoreLayoutNamedPagesItem> $namedPages
     */
    #[JsonProperty('namedPages'), ArrayType([ChangeItemPagesRestoreLayoutNamedPagesItem::class])]
    public array $namedPages;

    /**
     * @param array{
     *   pageCount: int,
     *   pages: array<ChangeItemPagesRestoreLayoutPagesItem>,
     *   labels: array<ChangeItemPagesRestoreLayoutLabelsItem>,
     *   namedPages: array<ChangeItemPagesRestoreLayoutNamedPagesItem>,
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
