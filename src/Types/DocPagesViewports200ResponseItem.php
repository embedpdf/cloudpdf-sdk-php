<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocPagesViewports200ResponseItem extends JsonSerializableType
{
    /**
     * @var DocPagesViewports200ResponseItemBbox $bbox
     */
    #[JsonProperty('bbox')]
    public DocPagesViewports200ResponseItemBbox $bbox;

    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?DocPagesViewports200ResponseItemMeasure $measure
     */
    #[JsonProperty('measure')]
    public ?DocPagesViewports200ResponseItemMeasure $measure;

    /**
     * @var bool $owned
     */
    #[JsonProperty('owned')]
    public bool $owned;

    /**
     * @param array{
     *   bbox: DocPagesViewports200ResponseItemBbox,
     *   owned: bool,
     *   name?: ?string,
     *   measure?: ?DocPagesViewports200ResponseItemMeasure,
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
