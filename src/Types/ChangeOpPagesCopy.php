<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;
use CloudPDF\Core\Types\Union;

class ChangeOpPagesCopy extends JsonSerializableType
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
     * )|null $position
     */
    #[JsonProperty('position'), Union('string', PagePositionAfter::class, 'null')]
    public string|PagePositionAfter|null $position;

    /**
     * @var ?array<int> $objectNumbers
     */
    #[JsonProperty('objectNumbers'), ArrayType(['integer'])]
    public ?array $objectNumbers;

    /**
     * @param array{
     *   pages: array<PageRef>,
     *   position?: (
     *    value-of<PagePositionZero>
     *   |PagePositionAfter
     * )|null,
     *   objectNumbers?: ?array<int>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->pages = $values['pages'];
        $this->position = $values['position'] ?? null;
        $this->objectNumbers = $values['objectNumbers'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
