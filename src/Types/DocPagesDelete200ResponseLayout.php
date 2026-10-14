<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocPagesDelete200ResponseLayout extends JsonSerializableType
{
    /**
     * @var int $pageCount
     */
    #[JsonProperty('pageCount')]
    public int $pageCount;

    /**
     * @var array<DocPagesDelete200ResponseLayoutPagesItem> $pages
     */
    #[JsonProperty('pages'), ArrayType([DocPagesDelete200ResponseLayoutPagesItem::class])]
    public array $pages;

    /**
     * @var array<DocPagesDelete200ResponseLayoutNamedPagesItem> $namedPages
     */
    #[JsonProperty('namedPages'), ArrayType([DocPagesDelete200ResponseLayoutNamedPagesItem::class])]
    public array $namedPages;

    /**
     * @param array{
     *   pageCount: int,
     *   pages: array<DocPagesDelete200ResponseLayoutPagesItem>,
     *   namedPages: array<DocPagesDelete200ResponseLayoutNamedPagesItem>,
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
