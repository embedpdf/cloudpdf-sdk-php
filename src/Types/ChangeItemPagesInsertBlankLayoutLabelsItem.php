<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class ChangeItemPagesInsertBlankLayoutLabelsItem extends JsonSerializableType
{
    /**
     * @var int $firstPage
     */
    #[JsonProperty('firstPage')]
    public int $firstPage;

    /**
     * @var ?value-of<ChangeItemPagesInsertBlankLayoutLabelsItemStyle> $style
     */
    #[JsonProperty('style')]
    public ?string $style;

    /**
     * @var int $firstNumber
     */
    #[JsonProperty('firstNumber')]
    public int $firstNumber;

    /**
     * @var string $prefix
     */
    #[JsonProperty('prefix')]
    public string $prefix;

    /**
     * @param array{
     *   firstPage: int,
     *   firstNumber: int,
     *   prefix: string,
     *   style?: ?value-of<ChangeItemPagesInsertBlankLayoutLabelsItemStyle>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->firstPage = $values['firstPage'];
        $this->style = $values['style'] ?? null;
        $this->firstNumber = $values['firstNumber'];
        $this->prefix = $values['prefix'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
