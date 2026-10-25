<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class OutlinePositionAfter extends JsonSerializableType
{
    /**
     * @var ?OutlineItemRef $before
     */
    #[JsonProperty('before')]
    public ?OutlineItemRef $before;

    /**
     * @var ?OutlineItemRef $after
     */
    #[JsonProperty('after')]
    public ?OutlineItemRef $after;

    /**
     * @param array{
     *   before?: ?OutlineItemRef,
     *   after?: ?OutlineItemRef,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->before = $values['before'] ?? null;
        $this->after = $values['after'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
