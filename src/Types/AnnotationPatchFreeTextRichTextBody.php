<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class AnnotationPatchFreeTextRichTextBody extends JsonSerializableType
{
    /**
     * @var ?string $family
     */
    #[JsonProperty('family')]
    public ?string $family;

    /**
     * @var ?int $weight
     */
    #[JsonProperty('weight')]
    public ?int $weight;

    /**
     * @var ?bool $italic
     */
    #[JsonProperty('italic')]
    public ?bool $italic;

    /**
     * @var ?float $size
     */
    #[JsonProperty('size')]
    public ?float $size;

    /**
     * @var ?string $color
     */
    #[JsonProperty('color')]
    public ?string $color;

    /**
     * @var ?array<value-of<AnnotationPatchFreeTextRichTextBodyDecorationItem>> $decoration
     */
    #[JsonProperty('decoration'), ArrayType(['string'])]
    public ?array $decoration;

    /**
     * @var ?value-of<AnnotationPatchFreeTextRichTextBodyScript> $script
     */
    #[JsonProperty('script')]
    public ?string $script;

    /**
     * @var ?float $letterSpacing
     */
    #[JsonProperty('letterSpacing')]
    public ?float $letterSpacing;

    /**
     * @var ?float $horizontalScale
     */
    #[JsonProperty('horizontalScale')]
    public ?float $horizontalScale;

    /**
     * @var ?string $unknown
     */
    #[JsonProperty('unknown')]
    public ?string $unknown;

    /**
     * @var ?value-of<AnnotationPatchFreeTextRichTextBodyAlign> $align
     */
    #[JsonProperty('align')]
    public ?string $align;

    /**
     * @var ?value-of<AnnotationPatchFreeTextRichTextBodyDir> $dir
     */
    #[JsonProperty('dir')]
    public ?string $dir;

    /**
     * @var ?float $lineHeight
     */
    #[JsonProperty('lineHeight')]
    public ?float $lineHeight;

    /**
     * @var ?AnnotationPatchFreeTextRichTextBodyMargins $margins
     */
    #[JsonProperty('margins')]
    public ?AnnotationPatchFreeTextRichTextBodyMargins $margins;

    /**
     * @var ?float $textIndent
     */
    #[JsonProperty('textIndent')]
    public ?float $textIndent;

    /**
     * @param array{
     *   family?: ?string,
     *   weight?: ?int,
     *   italic?: ?bool,
     *   size?: ?float,
     *   color?: ?string,
     *   decoration?: ?array<value-of<AnnotationPatchFreeTextRichTextBodyDecorationItem>>,
     *   script?: ?value-of<AnnotationPatchFreeTextRichTextBodyScript>,
     *   letterSpacing?: ?float,
     *   horizontalScale?: ?float,
     *   unknown?: ?string,
     *   align?: ?value-of<AnnotationPatchFreeTextRichTextBodyAlign>,
     *   dir?: ?value-of<AnnotationPatchFreeTextRichTextBodyDir>,
     *   lineHeight?: ?float,
     *   margins?: ?AnnotationPatchFreeTextRichTextBodyMargins,
     *   textIndent?: ?float,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->family = $values['family'] ?? null;
        $this->weight = $values['weight'] ?? null;
        $this->italic = $values['italic'] ?? null;
        $this->size = $values['size'] ?? null;
        $this->color = $values['color'] ?? null;
        $this->decoration = $values['decoration'] ?? null;
        $this->script = $values['script'] ?? null;
        $this->letterSpacing = $values['letterSpacing'] ?? null;
        $this->horizontalScale = $values['horizontalScale'] ?? null;
        $this->unknown = $values['unknown'] ?? null;
        $this->align = $values['align'] ?? null;
        $this->dir = $values['dir'] ?? null;
        $this->lineHeight = $values['lineHeight'] ?? null;
        $this->margins = $values['margins'] ?? null;
        $this->textIndent = $values['textIndent'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
