<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class PageListSnapshot extends JsonSerializableType
{
    /**
     * @var int $pageCount
     */
    #[JsonProperty('pageCount')]
    public int $pageCount;

    /**
     * @var array<PageListSnapshotPagesItem> $pages
     */
    #[JsonProperty('pages'), ArrayType([PageListSnapshotPagesItem::class])]
    public array $pages;

    /**
     * @var array<PageListSnapshotLabelsItem> $labels
     */
    #[JsonProperty('labels'), ArrayType([PageListSnapshotLabelsItem::class])]
    public array $labels;

    /**
     * @var array<PageListSnapshotNamedPagesItem> $namedPages
     */
    #[JsonProperty('namedPages'), ArrayType([PageListSnapshotNamedPagesItem::class])]
    public array $namedPages;

    /**
     * @param array{
     *   pageCount: int,
     *   pages: array<PageListSnapshotPagesItem>,
     *   labels: array<PageListSnapshotLabelsItem>,
     *   namedPages: array<PageListSnapshotNamedPagesItem>,
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
