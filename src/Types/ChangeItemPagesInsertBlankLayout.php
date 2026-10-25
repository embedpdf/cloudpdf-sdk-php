<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class ChangeItemPagesInsertBlankLayout extends JsonSerializableType
{
    /**
     * @var int $pageCount
     */
    #[JsonProperty('pageCount')]
    public int $pageCount;

    /**
     * @var array<ChangeItemPagesInsertBlankLayoutPagesItem> $pages
     */
    #[JsonProperty('pages'), ArrayType([ChangeItemPagesInsertBlankLayoutPagesItem::class])]
    public array $pages;

    /**
     * @var array<ChangeItemPagesInsertBlankLayoutNamedPagesItem> $namedPages
     */
    #[JsonProperty('namedPages'), ArrayType([ChangeItemPagesInsertBlankLayoutNamedPagesItem::class])]
    public array $namedPages;

    /**
     * @param array{
     *   pageCount: int,
     *   pages: array<ChangeItemPagesInsertBlankLayoutPagesItem>,
     *   namedPages: array<ChangeItemPagesInsertBlankLayoutNamedPagesItem>,
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
