<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class ChangeItemPagesRotateLayout extends JsonSerializableType
{
    /**
     * @var int $pageCount
     */
    #[JsonProperty('pageCount')]
    public int $pageCount;

    /**
     * @var array<ChangeItemPagesRotateLayoutPagesItem> $pages
     */
    #[JsonProperty('pages'), ArrayType([ChangeItemPagesRotateLayoutPagesItem::class])]
    public array $pages;

    /**
     * @var array<ChangeItemPagesRotateLayoutNamedPagesItem> $namedPages
     */
    #[JsonProperty('namedPages'), ArrayType([ChangeItemPagesRotateLayoutNamedPagesItem::class])]
    public array $namedPages;

    /**
     * @param array{
     *   pageCount: int,
     *   pages: array<ChangeItemPagesRotateLayoutPagesItem>,
     *   namedPages: array<ChangeItemPagesRotateLayoutNamedPagesItem>,
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
