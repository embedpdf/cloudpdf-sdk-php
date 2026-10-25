<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class ChangeItemPagesInsertLayout extends JsonSerializableType
{
    /**
     * @var int $pageCount
     */
    #[JsonProperty('pageCount')]
    public int $pageCount;

    /**
     * @var array<ChangeItemPagesInsertLayoutPagesItem> $pages
     */
    #[JsonProperty('pages'), ArrayType([ChangeItemPagesInsertLayoutPagesItem::class])]
    public array $pages;

    /**
     * @var array<ChangeItemPagesInsertLayoutNamedPagesItem> $namedPages
     */
    #[JsonProperty('namedPages'), ArrayType([ChangeItemPagesInsertLayoutNamedPagesItem::class])]
    public array $namedPages;

    /**
     * @param array{
     *   pageCount: int,
     *   pages: array<ChangeItemPagesInsertLayoutPagesItem>,
     *   namedPages: array<ChangeItemPagesInsertLayoutNamedPagesItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->pageCount = $values['pageCount'];
        $this->pages = $values['pages'];
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
