<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class AnnotationFreeTextRichTextParagraphsItem extends JsonSerializableType
{
    /**
     * @var ?value-of<AnnotationFreeTextRichTextParagraphsItemAlign> $align
     */
    #[JsonProperty('align')]
    public ?string $align;

    /**
     * @var ?value-of<AnnotationFreeTextRichTextParagraphsItemDir> $dir
     */
    #[JsonProperty('dir')]
    public ?string $dir;

    /**
     * @var ?float $lineHeight
     */
    #[JsonProperty('lineHeight')]
    public ?float $lineHeight;

    /**
     * @var ?AnnotationFreeTextRichTextParagraphsItemMargins $margins
     */
    #[JsonProperty('margins')]
    public ?AnnotationFreeTextRichTextParagraphsItemMargins $margins;

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
     * @var array<AnnotationFreeTextRichTextParagraphsItemRunsItem> $runs
     */
    #[JsonProperty('runs'), ArrayType([AnnotationFreeTextRichTextParagraphsItemRunsItem::class])]
    public array $runs;

    /**
     * @param array{
     *   runs: array<AnnotationFreeTextRichTextParagraphsItemRunsItem>,
     *   align?: ?value-of<AnnotationFreeTextRichTextParagraphsItemAlign>,
     *   dir?: ?value-of<AnnotationFreeTextRichTextParagraphsItemDir>,
     *   lineHeight?: ?float,
     *   margins?: ?AnnotationFreeTextRichTextParagraphsItemMargins,
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
