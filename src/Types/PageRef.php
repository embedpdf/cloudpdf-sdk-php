<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class PageRef extends JsonSerializableType
{
    /**
     * @var value-of<PageRefKind> $kind
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
     *   kind: value-of<PageRefKind>,
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
