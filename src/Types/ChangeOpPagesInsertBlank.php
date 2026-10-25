<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\Union;
use CloudPDF\Core\Types\ArrayType;

class ChangeOpPagesInsertBlank extends JsonSerializableType
{
    /**
     * @var ChangeOpPagesInsertBlankSpec $spec
     */
    #[JsonProperty('spec')]
    public ChangeOpPagesInsertBlankSpec $spec;

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
     *   spec: ChangeOpPagesInsertBlankSpec,
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
        $this->spec = $values['spec'];
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
