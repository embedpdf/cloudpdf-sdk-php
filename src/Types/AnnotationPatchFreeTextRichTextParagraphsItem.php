<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class AnnotationPatchFreeTextRichTextParagraphsItem extends JsonSerializableType
{
    /**
     * @var ?value-of<AnnotationPatchFreeTextRichTextParagraphsItemAlign> $align
     */
    #[JsonProperty('align')]
    public ?string $align;

    /**
     * @var ?value-of<AnnotationPatchFreeTextRichTextParagraphsItemDir> $dir
     */
    #[JsonProperty('dir')]
    public ?string $dir;

    /**
     * @var ?float $lineHeight
     */
    #[JsonProperty('lineHeight')]
    public ?float $lineHeight;

    /**
     * @var ?AnnotationPatchFreeTextRichTextParagraphsItemMargins $margins
     */
    #[JsonProperty('margins')]
    public ?AnnotationPatchFreeTextRichTextParagraphsItemMargins $margins;

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
     * @var array<AnnotationPatchFreeTextRichTextParagraphsItemRunsItem> $runs
     */
    #[JsonProperty('runs'), ArrayType([AnnotationPatchFreeTextRichTextParagraphsItemRunsItem::class])]
    public array $runs;

    /**
     * @param array{
     *   runs: array<AnnotationPatchFreeTextRichTextParagraphsItemRunsItem>,
     *   align?: ?value-of<AnnotationPatchFreeTextRichTextParagraphsItemAlign>,
     *   dir?: ?value-of<AnnotationPatchFreeTextRichTextParagraphsItemDir>,
     *   lineHeight?: ?float,
     *   margins?: ?AnnotationPatchFreeTextRichTextParagraphsItemMargins,
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
