<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\Union;
use CloudPDF\Core\Types\ArrayType;

class ChangeOpPagesInsert extends JsonSerializableType
{
    /**
     * @var ChangeOpPagesInsertResources $resources
     */
    #[JsonProperty('resources')]
    public ChangeOpPagesInsertResources $resources;

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
     *   resources: ChangeOpPagesInsertResources,
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
        $this->resources = $values['resources'];
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
