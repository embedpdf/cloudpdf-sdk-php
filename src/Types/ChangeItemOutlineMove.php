<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class ChangeItemOutlineMove extends JsonSerializableType
{
    /**
     * @var array<OutlineOrder> $orders
     */
    #[JsonProperty('orders'), ArrayType([OutlineOrder::class])]
    public array $orders;

    /**
     * @var OutlineMutationMeta $meta
     */
    #[JsonProperty('meta')]
    public OutlineMutationMeta $meta;

    /**
     * @param array{
     *   orders: array<OutlineOrder>,
     *   meta: OutlineMutationMeta,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->orders = $values['orders'];
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
