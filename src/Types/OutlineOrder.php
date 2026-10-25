<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class OutlineOrder extends JsonSerializableType
{
    /**
     * @var ?OutlineItemRef $parent
     */
    #[JsonProperty('parent')]
    public ?OutlineItemRef $parent;

    /**
     * @var array<OutlineItemRef> $children
     */
    #[JsonProperty('children'), ArrayType([OutlineItemRef::class])]
    public array $children;

    /**
     * @param array{
     *   children: array<OutlineItemRef>,
     *   parent?: ?OutlineItemRef,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->parent = $values['parent'] ?? null;
        $this->children = $values['children'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
