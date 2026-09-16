<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocAnnotationsList200ResponseAnnotationsItemFreeTextRichTextParagraphsItem extends JsonSerializableType
{
    /**
     * @var ?value-of<DocAnnotationsList200ResponseAnnotationsItemFreeTextRichTextParagraphsItemAlign> $align
     */
    #[JsonProperty('align')]
    public ?string $align;

    /**
     * @var ?value-of<DocAnnotationsList200ResponseAnnotationsItemFreeTextRichTextParagraphsItemDir> $dir
     */
    #[JsonProperty('dir')]
    public ?string $dir;

    /**
     * @var ?float $lineHeight
     */
    #[JsonProperty('lineHeight')]
    public ?float $lineHeight;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemFreeTextRichTextParagraphsItemMargins $margins
     */
    #[JsonProperty('margins')]
    public ?DocAnnotationsList200ResponseAnnotationsItemFreeTextRichTextParagraphsItemMargins $margins;

    /**
     * @var ?float $textIndent
     */
    #[JsonProperty('textIndent')]
    public ?float $textIndent;

    /**
     * @var ?string $unknown
     */
    #[JsonProperty('unknown')]
    public ?string $unknown;

    /**
     * @var array<DocAnnotationsList200ResponseAnnotationsItemFreeTextRichTextParagraphsItemRunsItem> $runs
     */
    #[JsonProperty('runs'), ArrayType([DocAnnotationsList200ResponseAnnotationsItemFreeTextRichTextParagraphsItemRunsItem::class])]
    public array $runs;

    /**
     * @param array{
     *   runs: array<DocAnnotationsList200ResponseAnnotationsItemFreeTextRichTextParagraphsItemRunsItem>,
     *   align?: ?value-of<DocAnnotationsList200ResponseAnnotationsItemFreeTextRichTextParagraphsItemAlign>,
     *   dir?: ?value-of<DocAnnotationsList200ResponseAnnotationsItemFreeTextRichTextParagraphsItemDir>,
     *   lineHeight?: ?float,
     *   margins?: ?DocAnnotationsList200ResponseAnnotationsItemFreeTextRichTextParagraphsItemMargins,
     *   textIndent?: ?float,
     *   unknown?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->align = $values['align'] ?? null;
        $this->dir = $values['dir'] ?? null;
        $this->lineHeight = $values['lineHeight'] ?? null;
        $this->margins = $values['margins'] ?? null;
        $this->textIndent = $values['textIndent'] ?? null;
        $this->unknown = $values['unknown'] ?? null;
        $this->runs = $values['runs'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
