<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class PdfPageActions extends JsonSerializableType
{
    /**
     * @var ?PdfActionTree $open
     */
    #[JsonProperty('open')]
    public ?PdfActionTree $open;

    /**
     * @var ?PdfActionTree $close
     */
    #[JsonProperty('close')]
    public ?PdfActionTree $close;

    /**
     * @param array{
     *   open?: ?PdfActionTree,
     *   close?: ?PdfActionTree,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->open = $values['open'] ?? null;
        $this->close = $values['close'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
