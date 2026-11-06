<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocPagesViewportsResponse extends JsonSerializableType
{
    /**
     * @var array<DocPagesViewportsResponseViewportsItem> $viewports
     */
    #[JsonProperty('viewports'), ArrayType([DocPagesViewportsResponseViewportsItem::class])]
    public array $viewports;

    /**
     * @param array{
     *   viewports: array<DocPagesViewportsResponseViewportsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->viewports = $values['viewports'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
