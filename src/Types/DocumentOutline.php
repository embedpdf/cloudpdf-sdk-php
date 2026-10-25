<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocumentOutline extends JsonSerializableType
{
    /**
     * @var array<OutlineItem> $items
     */
    #[JsonProperty('items'), ArrayType([OutlineItem::class])]
    public array $items;

    /**
     * @var bool $incomplete
     */
    #[JsonProperty('incomplete')]
    public bool $incomplete;

    /**
     * @param array{
     *   items: array<OutlineItem>,
     *   incomplete: bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->items = $values['items'];
        $this->incomplete = $values['incomplete'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
