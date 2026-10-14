<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocPagesViewports200ResponseViewportsItem extends JsonSerializableType
{
    /**
     * @var DocPagesViewports200ResponseViewportsItemBbox $bbox
     */
    #[JsonProperty('bbox')]
    public DocPagesViewports200ResponseViewportsItemBbox $bbox;

    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?DocPagesViewports200ResponseViewportsItemMeasure $measure
     */
    #[JsonProperty('measure')]
    public ?DocPagesViewports200ResponseViewportsItemMeasure $measure;

    /**
     * @var bool $owned
     */
    #[JsonProperty('owned')]
    public bool $owned;

    /**
     * @param array{
     *   bbox: DocPagesViewports200ResponseViewportsItemBbox,
     *   owned: bool,
     *   name?: ?string,
     *   measure?: ?DocPagesViewports200ResponseViewportsItemMeasure,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->bbox = $values['bbox'];
        $this->name = $values['name'] ?? null;
        $this->measure = $values['measure'] ?? null;
        $this->owned = $values['owned'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
