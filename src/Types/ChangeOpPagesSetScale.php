<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class ChangeOpPagesSetScale extends JsonSerializableType
{
    /**
     * @var array<PageRef> $pages
     */
    #[JsonProperty('pages'), ArrayType([PageRef::class])]
    public array $pages;

    /**
     * @var ?ChangeOpPagesSetScaleMeasure $measure
     */
    #[JsonProperty('measure')]
    public ?ChangeOpPagesSetScaleMeasure $measure;

    /**
     * @param array{
     *   pages: array<PageRef>,
     *   measure?: ?ChangeOpPagesSetScaleMeasure,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->pages = $values['pages'];
        $this->measure = $values['measure'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
