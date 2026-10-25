<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class OutlineItem extends JsonSerializableType
{
    /**
     * @var OutlineItemRef $ref
     */
    #[JsonProperty('ref')]
    public OutlineItemRef $ref;

    /**
     * @var ?OutlineItemRef $parent
     */
    #[JsonProperty('parent')]
    public ?OutlineItemRef $parent;

    /**
     * @var string $title
     */
    #[JsonProperty('title')]
    public string $title;

    /**
     * @var ?PdfLinkTarget $target
     */
    #[JsonProperty('target')]
    public ?PdfLinkTarget $target;

    /**
     * @var ?PdfActionTree $action
     */
    #[JsonProperty('action')]
    public ?PdfActionTree $action;

    /**
     * @var bool $open
     */
    #[JsonProperty('open')]
    public bool $open;

    /**
     * @var ?string $color
     */
    #[JsonProperty('color')]
    public ?string $color;

    /**
     * @var bool $bold
     */
    #[JsonProperty('bold')]
    public bool $bold;

    /**
     * @var bool $italic
     */
    #[JsonProperty('italic')]
    public bool $italic;

    /**
     * @param array{
     *   ref: OutlineItemRef,
     *   title: string,
     *   open: bool,
     *   bold: bool,
     *   italic: bool,
     *   parent?: ?OutlineItemRef,
     *   target?: ?PdfLinkTarget,
     *   action?: ?PdfActionTree,
     *   color?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->ref = $values['ref'];
        $this->parent = $values['parent'] ?? null;
        $this->title = $values['title'];
        $this->target = $values['target'] ?? null;
        $this->action = $values['action'] ?? null;
        $this->open = $values['open'];
        $this->color = $values['color'] ?? null;
        $this->bold = $values['bold'];
        $this->italic = $values['italic'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
