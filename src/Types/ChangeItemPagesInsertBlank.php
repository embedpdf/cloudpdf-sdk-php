<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class ChangeItemPagesInsertBlank extends JsonSerializableType
{
    /**
     * @var array<PageRef> $insertedPages
     */
    #[JsonProperty('insertedPages'), ArrayType([PageRef::class])]
    public array $insertedPages;

    /**
     * @var ChangeItemPagesInsertBlankLayout $layout
     */
    #[JsonProperty('layout')]
    public ChangeItemPagesInsertBlankLayout $layout;

    /**
     * @var MutationMeta $meta
     */
    #[JsonProperty('meta')]
    public MutationMeta $meta;

    /**
     * @param array{
     *   insertedPages: array<PageRef>,
     *   layout: ChangeItemPagesInsertBlankLayout,
     *   meta: MutationMeta,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->insertedPages = $values['insertedPages'];
        $this->layout = $values['layout'];
        $this->meta = $values['meta'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
