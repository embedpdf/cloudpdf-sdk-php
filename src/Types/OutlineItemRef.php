<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class OutlineItemRef extends JsonSerializableType
{
    /**
     * @var value-of<OutlineItemRefKind> $kind
     */
    #[JsonProperty('kind')]
    public string $kind;

    /**
     * @var int $objectNumber
     */
    #[JsonProperty('objectNumber')]
    public int $objectNumber;

    /**
     * @param array{
     *   kind: value-of<OutlineItemRefKind>,
     *   objectNumber: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->kind = $values['kind'];
        $this->objectNumber = $values['objectNumber'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
