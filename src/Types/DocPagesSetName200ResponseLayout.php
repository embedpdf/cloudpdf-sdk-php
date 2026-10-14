<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocPagesSetName200ResponseLayout extends JsonSerializableType
{
    /**
     * @var int $pageCount
     */
    #[JsonProperty('pageCount')]
    public int $pageCount;

    /**
     * @var array<DocPagesSetName200ResponseLayoutPagesItem> $pages
     */
    #[JsonProperty('pages'), ArrayType([DocPagesSetName200ResponseLayoutPagesItem::class])]
    public array $pages;

    /**
     * @var array<DocPagesSetName200ResponseLayoutNamedPagesItem> $namedPages
     */
    #[JsonProperty('namedPages'), ArrayType([DocPagesSetName200ResponseLayoutNamedPagesItem::class])]
    public array $namedPages;

    /**
     * @param array{
     *   pageCount: int,
     *   pages: array<DocPagesSetName200ResponseLayoutPagesItem>,
     *   namedPages: array<DocPagesSetName200ResponseLayoutNamedPagesItem>,
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
