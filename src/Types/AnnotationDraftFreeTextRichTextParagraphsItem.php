<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class AnnotationDraftFreeTextRichTextParagraphsItem extends JsonSerializableType
{
    /**
     * @var ?value-of<AnnotationDraftFreeTextRichTextParagraphsItemAlign> $align
     */
    #[JsonProperty('align')]
    public ?string $align;

    /**
     * @var ?value-of<AnnotationDraftFreeTextRichTextParagraphsItemDir> $dir
     */
    #[JsonProperty('dir')]
    public ?string $dir;

    /**
     * @var ?float $lineHeight
     */
    #[JsonProperty('lineHeight')]
    public ?float $lineHeight;

    /**
     * @var ?AnnotationDraftFreeTextRichTextParagraphsItemMargins $margins
     */
    #[JsonProperty('margins')]
    public ?AnnotationDraftFreeTextRichTextParagraphsItemMargins $margins;

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
     * @var array<AnnotationDraftFreeTextRichTextParagraphsItemRunsItem> $runs
     */
    #[JsonProperty('runs'), ArrayType([AnnotationDraftFreeTextRichTextParagraphsItemRunsItem::class])]
    public array $runs;

    /**
     * @param array{
     *   runs: array<AnnotationDraftFreeTextRichTextParagraphsItemRunsItem>,
     *   align?: ?value-of<AnnotationDraftFreeTextRichTextParagraphsItemAlign>,
     *   dir?: ?value-of<AnnotationDraftFreeTextRichTextParagraphsItemDir>,
     *   lineHeight?: ?float,
     *   margins?: ?AnnotationDraftFreeTextRichTextParagraphsItemMargins,
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
