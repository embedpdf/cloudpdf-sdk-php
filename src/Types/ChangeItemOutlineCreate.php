<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class ChangeItemOutlineCreate extends JsonSerializableType
{
    /**
     * @var OutlineItem $item
     */
    #[JsonProperty('item')]
    public OutlineItem $item;

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
     *   item: OutlineItem,
     *   order: OutlineOrder,
     *   meta: OutlineMutationMeta,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->item = $values['item'];
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
