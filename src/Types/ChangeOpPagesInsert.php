<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\Union;

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
     * @param array{
     *   resources: ChangeOpPagesInsertResources,
     *   position?: (
     *    value-of<PagePositionZero>
     *   |PagePositionAfter
     * )|null,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->resources = $values['resources'];
        $this->position = $values['position'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
