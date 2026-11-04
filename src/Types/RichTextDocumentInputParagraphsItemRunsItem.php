<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class RichTextDocumentInputParagraphsItemRunsItem extends JsonSerializableType
{
    /**
     * @var string $text
     */
    #[JsonProperty('text')]
    public string $text;

    /**
     * @var ?RichTextDocumentInputParagraphsItemRunsItemStyle $style
     */
    #[JsonProperty('style')]
    public ?RichTextDocumentInputParagraphsItemRunsItemStyle $style;

    /**
     * @param array{
     *   text: string,
     *   style?: ?RichTextDocumentInputParagraphsItemRunsItemStyle,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->text = $values['text'];
        $this->style = $values['style'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
