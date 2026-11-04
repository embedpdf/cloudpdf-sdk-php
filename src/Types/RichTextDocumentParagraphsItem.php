<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class RichTextDocumentParagraphsItem extends JsonSerializableType
{
    /**
     * @var ?value-of<RichTextDocumentParagraphsItemAlign> $align
     */
    #[JsonProperty('align')]
    public ?string $align;

    /**
     * @var ?value-of<RichTextDocumentParagraphsItemDir> $dir
     */
    #[JsonProperty('dir')]
    public ?string $dir;

    /**
     * @var ?float $lineHeight
     */
    #[JsonProperty('lineHeight')]
    public ?float $lineHeight;

    /**
     * @var ?RichTextDocumentParagraphsItemMargins $margins
     */
    #[JsonProperty('margins')]
    public ?RichTextDocumentParagraphsItemMargins $margins;

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
     * @var array<RichTextDocumentParagraphsItemRunsItem> $runs
     */
    #[JsonProperty('runs'), ArrayType([RichTextDocumentParagraphsItemRunsItem::class])]
    public array $runs;

    /**
     * @param array{
     *   runs: array<RichTextDocumentParagraphsItemRunsItem>,
     *   align?: ?value-of<RichTextDocumentParagraphsItemAlign>,
     *   dir?: ?value-of<RichTextDocumentParagraphsItemDir>,
     *   lineHeight?: ?float,
     *   margins?: ?RichTextDocumentParagraphsItemMargins,
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
