<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class PagePositionAfter extends JsonSerializableType
{
    /**
     * @var ?PageRef $before
     */
    #[JsonProperty('before')]
    public ?PageRef $before;

    /**
     * @var ?PageRef $after
     */
    #[JsonProperty('after')]
    public ?PageRef $after;

    /**
     * @param array{
     *   before?: ?PageRef,
     *   after?: ?PageRef,
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
