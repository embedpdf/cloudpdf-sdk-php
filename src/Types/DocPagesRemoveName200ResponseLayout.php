<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocPagesRemoveName200ResponseLayout extends JsonSerializableType
{
    /**
     * @var int $pageCount
     */
    #[JsonProperty('pageCount')]
    public int $pageCount;

    /**
     * @var array<DocPagesRemoveName200ResponseLayoutPagesItem> $pages
     */
    #[JsonProperty('pages'), ArrayType([DocPagesRemoveName200ResponseLayoutPagesItem::class])]
    public array $pages;

    /**
     * @var array<DocPagesRemoveName200ResponseLayoutNamedPagesItem> $namedPages
     */
    #[JsonProperty('namedPages'), ArrayType([DocPagesRemoveName200ResponseLayoutNamedPagesItem::class])]
    public array $namedPages;

    /**
     * @param array{
     *   pageCount: int,
     *   pages: array<DocPagesRemoveName200ResponseLayoutPagesItem>,
     *   namedPages: array<DocPagesRemoveName200ResponseLayoutNamedPagesItem>,
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
