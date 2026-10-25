<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class ChangeItemPagesInsert extends JsonSerializableType
{
    /**
     * @var array<PageRef> $insertedPages
     */
    #[JsonProperty('insertedPages'), ArrayType([PageRef::class])]
    public array $insertedPages;

    /**
     * @var ChangeItemPagesInsertLayout $layout
     */
    #[JsonProperty('layout')]
    public ChangeItemPagesInsertLayout $layout;

    /**
     * @var MutationMeta $meta
     */
    #[JsonProperty('meta')]
    public MutationMeta $meta;

    /**
     * @param array{
     *   insertedPages: array<PageRef>,
     *   layout: ChangeItemPagesInsertLayout,
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
