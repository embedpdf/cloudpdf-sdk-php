<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;
use CloudPDF\Core\Types\Union;

class ChangeOpOutlineMove extends JsonSerializableType
{
    /**
     * @var array<OutlineItemRef> $refs
     */
    #[JsonProperty('refs'), ArrayType([OutlineItemRef::class])]
    public array $refs;

    /**
     * @var ?OutlineItemRef $parent
     */
    #[JsonProperty('parent')]
    public ?OutlineItemRef $parent;

    /**
     * @var (
     *    value-of<OutlinePositionZero>
     *   |OutlinePositionAfter
     * ) $position
     */
    #[JsonProperty('position'), Union('string', OutlinePositionAfter::class)]
    public string|OutlinePositionAfter $position;

    /**
     * @param array{
     *   refs: array<OutlineItemRef>,
     *   position: (
     *    value-of<OutlinePositionZero>
     *   |OutlinePositionAfter
     * ),
     *   parent?: ?OutlineItemRef,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->refs = $values['refs'];
        $this->parent = $values['parent'] ?? null;
        $this->position = $values['position'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
