<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class FieldPositionAfter extends JsonSerializableType
{
    /**
     * @var ?FormFieldRef $before
     */
    #[JsonProperty('before')]
    public ?FormFieldRef $before;

    /**
     * @var ?FormFieldRef $after
     */
    #[JsonProperty('after')]
    public ?FormFieldRef $after;

    /**
     * @param array{
     *   before?: ?FormFieldRef,
     *   after?: ?FormFieldRef,
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
