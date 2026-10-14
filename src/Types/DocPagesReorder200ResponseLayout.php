<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocPagesReorder200ResponseLayout extends JsonSerializableType
{
    /**
     * @var int $pageCount
     */
    #[JsonProperty('pageCount')]
    public int $pageCount;

    /**
     * @var array<DocPagesReorder200ResponseLayoutPagesItem> $pages
     */
    #[JsonProperty('pages'), ArrayType([DocPagesReorder200ResponseLayoutPagesItem::class])]
    public array $pages;

    /**
     * @var array<DocPagesReorder200ResponseLayoutNamedPagesItem> $namedPages
     */
    #[JsonProperty('namedPages'), ArrayType([DocPagesReorder200ResponseLayoutNamedPagesItem::class])]
    public array $namedPages;

    /**
     * @param array{
     *   pageCount: int,
     *   pages: array<DocPagesReorder200ResponseLayoutPagesItem>,
     *   namedPages: array<DocPagesReorder200ResponseLayoutNamedPagesItem>,
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
