<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocPagesViewports200Response extends JsonSerializableType
{
    /**
     * @var array<DocPagesViewports200ResponseViewportsItem> $viewports
     */
    #[JsonProperty('viewports'), ArrayType([DocPagesViewports200ResponseViewportsItem::class])]
    public array $viewports;

    /**
     * @param array{
     *   viewports: array<DocPagesViewports200ResponseViewportsItem>,
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
