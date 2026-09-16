<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextRichTextParagraphsItem extends JsonSerializableType
{
    /**
     * @var ?value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextRichTextParagraphsItemAlign> $align
     */
    #[JsonProperty('align')]
    public ?string $align;

    /**
     * @var ?value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextRichTextParagraphsItemDir> $dir
     */
    #[JsonProperty('dir')]
    public ?string $dir;

    /**
     * @var ?float $lineHeight
     */
    #[JsonProperty('lineHeight')]
    public ?float $lineHeight;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextRichTextParagraphsItemMargins $margins
     */
    #[JsonProperty('margins')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextRichTextParagraphsItemMargins $margins;

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
     * @var array<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextRichTextParagraphsItemRunsItem> $runs
     */
    #[JsonProperty('runs'), ArrayType([DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextRichTextParagraphsItemRunsItem::class])]
    public array $runs;

    /**
     * @param array{
     *   runs: array<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextRichTextParagraphsItemRunsItem>,
     *   align?: ?value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextRichTextParagraphsItemAlign>,
     *   dir?: ?value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextRichTextParagraphsItemDir>,
     *   lineHeight?: ?float,
     *   margins?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextRichTextParagraphsItemMargins,
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
