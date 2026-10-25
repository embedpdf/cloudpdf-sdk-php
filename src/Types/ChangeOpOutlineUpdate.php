<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class ChangeOpOutlineUpdate extends JsonSerializableType
{
    /**
     * @var OutlineItemRef $ref
     */
    #[JsonProperty('ref')]
    public OutlineItemRef $ref;

    /**
     * @var OutlineItemPatch $patch
     */
    #[JsonProperty('patch')]
    public OutlineItemPatch $patch;

    /**
     * @var ?OutlineItemPatch $expect
     */
    #[JsonProperty('expect')]
    public ?OutlineItemPatch $expect;

    /**
     * @param array{
     *   ref: OutlineItemRef,
     *   patch: OutlineItemPatch,
     *   expect?: ?OutlineItemPatch,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->ref = $values['ref'];
        $this->patch = $values['patch'];
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
