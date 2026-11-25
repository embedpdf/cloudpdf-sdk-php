<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class FormFieldFormatWritableDate extends JsonSerializableType
{
    /**
     * @var string $pattern
     */
    #[JsonProperty('pattern')]
    public string $pattern;

    /**
     * @param array{
     *   pattern: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->pattern = $values['pattern'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
