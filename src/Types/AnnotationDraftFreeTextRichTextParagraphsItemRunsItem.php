<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class AnnotationDraftFreeTextRichTextParagraphsItemRunsItem extends JsonSerializableType
{
    /**
     * @var string $text
     */
    #[JsonProperty('text')]
    public string $text;

    /**
     * @var ?AnnotationDraftFreeTextRichTextParagraphsItemRunsItemStyle $style
     */
    #[JsonProperty('style')]
    public ?AnnotationDraftFreeTextRichTextParagraphsItemRunsItemStyle $style;

    /**
     * @param array{
     *   text: string,
     *   style?: ?AnnotationDraftFreeTextRichTextParagraphsItemRunsItemStyle,
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
