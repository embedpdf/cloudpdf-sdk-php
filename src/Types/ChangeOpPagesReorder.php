<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;
use CloudPDF\Core\Types\Union;

class ChangeOpPagesReorder extends JsonSerializableType
{
    /**
     * @var array<PageRef> $pages
     */
    #[JsonProperty('pages'), ArrayType([PageRef::class])]
    public array $pages;

    /**
     * @var (
     *    value-of<PagePositionZero>
     *   |PagePositionAfter
     * ) $position
     */
    #[JsonProperty('position'), Union('string', PagePositionAfter::class)]
    public string|PagePositionAfter $position;

    /**
     * @param array{
     *   pages: array<PageRef>,
     *   position: (
     *    value-of<PagePositionZero>
     *   |PagePositionAfter
     * ),
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->pages = $values['pages'];
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
