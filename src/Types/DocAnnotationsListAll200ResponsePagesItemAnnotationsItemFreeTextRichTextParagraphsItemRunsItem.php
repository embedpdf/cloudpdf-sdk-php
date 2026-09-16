<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextRichTextParagraphsItemRunsItem extends JsonSerializableType
{
    /**
     * @var string $text
     */
    #[JsonProperty('text')]
    public string $text;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextRichTextParagraphsItemRunsItemStyle $style
     */
    #[JsonProperty('style')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextRichTextParagraphsItemRunsItemStyle $style;

    /**
     * @param array{
     *   text: string,
     *   style?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextRichTextParagraphsItemRunsItemStyle,
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
