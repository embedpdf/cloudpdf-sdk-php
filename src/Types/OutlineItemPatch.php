<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class OutlineItemPatch extends JsonSerializableType
{
    /**
     * @var ?string $title
     */
    #[JsonProperty('title')]
    public ?string $title;

    /**
     * @var ?PdfLinkTargetWritable $target
     */
    #[JsonProperty('target')]
    public ?PdfLinkTargetWritable $target;

    /**
     * @var ?string $color
     */
    #[JsonProperty('color')]
    public ?string $color;

    /**
     * @var ?bool $bold
     */
    #[JsonProperty('bold')]
    public ?bool $bold;

    /**
     * @var ?bool $italic
     */
    #[JsonProperty('italic')]
    public ?bool $italic;

    /**
     * @var ?bool $open
     */
    #[JsonProperty('open')]
    public ?bool $open;

    /**
     * @param array{
     *   title?: ?string,
     *   target?: ?PdfLinkTargetWritable,
     *   color?: ?string,
     *   bold?: ?bool,
     *   italic?: ?bool,
     *   open?: ?bool,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->title = $values['title'] ?? null;
        $this->target = $values['target'] ?? null;
        $this->color = $values['color'] ?? null;
        $this->bold = $values['bold'] ?? null;
        $this->italic = $values['italic'] ?? null;
        $this->open = $values['open'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
