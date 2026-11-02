<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class ChangeItemPagesCopyLayout extends JsonSerializableType
{
    /**
     * @var int $pageCount
     */
    #[JsonProperty('pageCount')]
    public int $pageCount;

    /**
     * @var array<ChangeItemPagesCopyLayoutPagesItem> $pages
     */
    #[JsonProperty('pages'), ArrayType([ChangeItemPagesCopyLayoutPagesItem::class])]
    public array $pages;

    /**
     * @var array<ChangeItemPagesCopyLayoutLabelsItem> $labels
     */
    #[JsonProperty('labels'), ArrayType([ChangeItemPagesCopyLayoutLabelsItem::class])]
    public array $labels;

    /**
     * @var array<ChangeItemPagesCopyLayoutNamedPagesItem> $namedPages
     */
    #[JsonProperty('namedPages'), ArrayType([ChangeItemPagesCopyLayoutNamedPagesItem::class])]
    public array $namedPages;

    /**
     * @param array{
     *   pageCount: int,
     *   pages: array<ChangeItemPagesCopyLayoutPagesItem>,
     *   labels: array<ChangeItemPagesCopyLayoutLabelsItem>,
     *   namedPages: array<ChangeItemPagesCopyLayoutNamedPagesItem>,
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
