<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\Union;

class ChangeOpOutlineCreate extends JsonSerializableType
{
    /**
     * @var ?OutlineItemRef $parent
     */
    #[JsonProperty('parent')]
    public ?OutlineItemRef $parent;

    /**
     * @var (
     *    value-of<OutlinePositionZero>
     *   |OutlinePositionAfter
     * )|null $position
     */
    #[JsonProperty('position'), Union('string', OutlinePositionAfter::class, 'null')]
    public string|OutlinePositionAfter|null $position;

    /**
     * @var OutlineItemDraft $data
     */
    #[JsonProperty('data')]
    public OutlineItemDraft $data;

    /**
     * @var ?int $objectNumber
     */
    #[JsonProperty('objectNumber')]
    public ?int $objectNumber;

    /**
     * @param array{
     *   data: OutlineItemDraft,
     *   parent?: ?OutlineItemRef,
     *   position?: (
     *    value-of<OutlinePositionZero>
     *   |OutlinePositionAfter
     * )|null,
     *   objectNumber?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->parent = $values['parent'] ?? null;
        $this->position = $values['position'] ?? null;
        $this->data = $values['data'];
        $this->objectNumber = $values['objectNumber'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
