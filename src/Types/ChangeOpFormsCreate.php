<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class ChangeOpFormsCreate extends JsonSerializableType
{
    /**
     * @var FormFieldDraft $draft
     */
    #[JsonProperty('draft')]
    public FormFieldDraft $draft;

    /**
     * @var ?int $objectNumber
     */
    #[JsonProperty('objectNumber')]
    public ?int $objectNumber;

    /**
     * @var ?array<int> $widgetObjectNumbers
     */
    #[JsonProperty('widgetObjectNumbers'), ArrayType(['integer'])]
    public ?array $widgetObjectNumbers;

    /**
     * @param array{
     *   draft: FormFieldDraft,
     *   objectNumber?: ?int,
     *   widgetObjectNumbers?: ?array<int>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->draft = $values['draft'];
        $this->objectNumber = $values['objectNumber'] ?? null;
        $this->widgetObjectNumbers = $values['widgetObjectNumbers'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
