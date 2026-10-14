<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class ChangeResult extends JsonSerializableType
{
    /**
     * @var array<ChangeItem> $items
     */
    #[JsonProperty('items'), ArrayType([ChangeItem::class])]
    public array $items;

    /**
     * @var MutationMeta $meta
     */
    #[JsonProperty('meta')]
    public MutationMeta $meta;

    /**
     * @param array{
     *   items: array<ChangeItem>,
     *   meta: MutationMeta,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->items = $values['items'];
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
