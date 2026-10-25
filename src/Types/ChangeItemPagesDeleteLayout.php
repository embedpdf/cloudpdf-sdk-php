<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class ChangeItemPagesDeleteLayout extends JsonSerializableType
{
    /**
     * @var int $pageCount
     */
    #[JsonProperty('pageCount')]
    public int $pageCount;

    /**
     * @var array<ChangeItemPagesDeleteLayoutPagesItem> $pages
     */
    #[JsonProperty('pages'), ArrayType([ChangeItemPagesDeleteLayoutPagesItem::class])]
    public array $pages;

    /**
     * @var array<ChangeItemPagesDeleteLayoutNamedPagesItem> $namedPages
     */
    #[JsonProperty('namedPages'), ArrayType([ChangeItemPagesDeleteLayoutNamedPagesItem::class])]
    public array $namedPages;

    /**
     * @param array{
     *   pageCount: int,
     *   pages: array<ChangeItemPagesDeleteLayoutPagesItem>,
     *   namedPages: array<ChangeItemPagesDeleteLayoutNamedPagesItem>,
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
