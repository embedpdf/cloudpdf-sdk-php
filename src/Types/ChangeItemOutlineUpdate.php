<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class ChangeItemOutlineUpdate extends JsonSerializableType
{
    /**
     * @var ?array<string> $skipped
     */
    #[JsonProperty('skipped'), ArrayType(['string'])]
    public ?array $skipped;

    /**
     * @var OutlineItem $item
     */
    #[JsonProperty('item')]
    public OutlineItem $item;

    /**
     * @var OutlineMutationMeta $meta
     */
    #[JsonProperty('meta')]
    public OutlineMutationMeta $meta;

    /**
     * @param array{
     *   item: OutlineItem,
     *   meta: OutlineMutationMeta,
     *   skipped?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->skipped = $values['skipped'] ?? null;
        $this->item = $values['item'];
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
