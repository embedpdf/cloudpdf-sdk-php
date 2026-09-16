<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextRichTextBody extends JsonSerializableType
{
    /**
     * @var string $family
     */
    #[JsonProperty('family')]
    public string $family;

    /**
     * @var int $weight
     */
    #[JsonProperty('weight')]
    public int $weight;

    /**
     * @var bool $italic
     */
    #[JsonProperty('italic')]
    public bool $italic;

    /**
     * @var float $size
     */
    #[JsonProperty('size')]
    public float $size;

    /**
     * @var string $color
     */
    #[JsonProperty('color')]
    public string $color;

    /**
     * @var array<value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextRichTextBodyDecorationItem>> $decoration
     */
    #[JsonProperty('decoration'), ArrayType(['string'])]
    public array $decoration;

    /**
     * @var value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextRichTextBodyScript> $script
     */
    #[JsonProperty('script')]
    public string $script;

    /**
     * @var float $letterSpacing
     */
    #[JsonProperty('letterSpacing')]
    public float $letterSpacing;

    /**
     * @var float $horizontalScale
     */
    #[JsonProperty('horizontalScale')]
    public float $horizontalScale;

    /**
     * @var ?string $unknown
     */
    #[JsonProperty('unknown')]
    public ?string $unknown;

    /**
     * @var value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextRichTextBodyAlign> $align
     */
    #[JsonProperty('align')]
    public string $align;

    /**
     * @var value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextRichTextBodyDir> $dir
     */
    #[JsonProperty('dir')]
    public string $dir;

    /**
     * @var ?float $lineHeight
     */
    #[JsonProperty('lineHeight')]
    public ?float $lineHeight;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextRichTextBodyMargins $margins
     */
    #[JsonProperty('margins')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextRichTextBodyMargins $margins;

    /**
     * @var ?float $textIndent
     */
    #[JsonProperty('textIndent')]
    public ?float $textIndent;

    /**
     * @param array{
     *   family: string,
     *   weight: int,
     *   italic: bool,
     *   size: float,
     *   color: string,
     *   decoration: array<value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextRichTextBodyDecorationItem>>,
     *   script: value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextRichTextBodyScript>,
     *   letterSpacing: float,
     *   horizontalScale: float,
     *   align: value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextRichTextBodyAlign>,
     *   dir: value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextRichTextBodyDir>,
     *   unknown?: ?string,
     *   lineHeight?: ?float,
     *   margins?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextRichTextBodyMargins,
     *   textIndent?: ?float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->family = $values['family'];
        $this->weight = $values['weight'];
        $this->italic = $values['italic'];
        $this->size = $values['size'];
        $this->color = $values['color'];
        $this->decoration = $values['decoration'];
        $this->script = $values['script'];
        $this->letterSpacing = $values['letterSpacing'];
        $this->horizontalScale = $values['horizontalScale'];
        $this->unknown = $values['unknown'] ?? null;
        $this->align = $values['align'];
        $this->dir = $values['dir'];
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
