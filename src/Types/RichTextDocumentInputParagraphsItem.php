<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class RichTextDocumentInputParagraphsItem extends JsonSerializableType
{
    /**
     * @var ?value-of<RichTextDocumentInputParagraphsItemAlign> $align
     */
    #[JsonProperty('align')]
    public ?string $align;

    /**
     * @var ?value-of<RichTextDocumentInputParagraphsItemDir> $dir
     */
    #[JsonProperty('dir')]
    public ?string $dir;

    /**
     * @var ?float $lineHeight
     */
    #[JsonProperty('lineHeight')]
    public ?float $lineHeight;

    /**
     * @var ?RichTextDocumentInputParagraphsItemMargins $margins
     */
    #[JsonProperty('margins')]
    public ?RichTextDocumentInputParagraphsItemMargins $margins;

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
     * @var array<RichTextDocumentInputParagraphsItemRunsItem> $runs
     */
    #[JsonProperty('runs'), ArrayType([RichTextDocumentInputParagraphsItemRunsItem::class])]
    public array $runs;

    /**
     * @param array{
     *   runs: array<RichTextDocumentInputParagraphsItemRunsItem>,
     *   align?: ?value-of<RichTextDocumentInputParagraphsItemAlign>,
     *   dir?: ?value-of<RichTextDocumentInputParagraphsItemDir>,
     *   lineHeight?: ?float,
     *   margins?: ?RichTextDocumentInputParagraphsItemMargins,
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
