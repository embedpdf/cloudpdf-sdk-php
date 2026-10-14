<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class AnnotationFreeTextRichTextParagraphsItemRunsItem extends JsonSerializableType
{
    /**
     * @var string $text
     */
    #[JsonProperty('text')]
    public string $text;

    /**
     * @var ?AnnotationFreeTextRichTextParagraphsItemRunsItemStyle $style
     */
    #[JsonProperty('style')]
    public ?AnnotationFreeTextRichTextParagraphsItemRunsItemStyle $style;

    /**
     * @param array{
     *   text: string,
     *   style?: ?AnnotationFreeTextRichTextParagraphsItemRunsItemStyle,
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
