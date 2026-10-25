<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class ChangeOpOutlineDelete extends JsonSerializableType
{
    /**
     * @var OutlineItemRef $ref
     */
    #[JsonProperty('ref')]
    public OutlineItemRef $ref;

    /**
     * @var ?OutlineItemPatch $expect
     */
    #[JsonProperty('expect')]
    public ?OutlineItemPatch $expect;

    /**
     * @param array{
     *   ref: OutlineItemRef,
     *   expect?: ?OutlineItemPatch,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->ref = $values['ref'];
        $this->expect = $values['expect'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
