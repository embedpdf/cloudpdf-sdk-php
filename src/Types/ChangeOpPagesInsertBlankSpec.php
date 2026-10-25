<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class ChangeOpPagesInsertBlankSpec extends JsonSerializableType
{
    /**
     * @var ChangeOpPagesInsertBlankSpecSize $size
     */
    #[JsonProperty('size')]
    public ChangeOpPagesInsertBlankSpecSize $size;

    /**
     * @var ?int $count
     */
    #[JsonProperty('count')]
    public ?int $count;

    /**
     * @param array{
     *   size: ChangeOpPagesInsertBlankSpecSize,
     *   count?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->size = $values['size'];
        $this->count = $values['count'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
