<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class ChangeItemOutlineRestore extends JsonSerializableType
{
    /**
     * @var array<OutlineItem> $items
     */
    #[JsonProperty('items'), ArrayType([OutlineItem::class])]
    public array $items;

    /**
     * @var OutlineOrder $order
     */
    #[JsonProperty('order')]
    public OutlineOrder $order;

    /**
     * @var OutlineMutationMeta $meta
     */
    #[JsonProperty('meta')]
    public OutlineMutationMeta $meta;

    /**
     * @param array{
     *   items: array<OutlineItem>,
     *   order: OutlineOrder,
     *   meta: OutlineMutationMeta,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->items = $values['items'];
        $this->order = $values['order'];
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
