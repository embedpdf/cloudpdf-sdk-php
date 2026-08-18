<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocText200Response extends JsonSerializableType
{
    /**
     * @var string $text
     */
    #[JsonProperty('text')]
    public string $text;

    /**
     * @var int $charCount
     */
    #[JsonProperty('charCount')]
    public int $charCount;

    /**
     * @var ?array<array<mixed>> $charMap
     */
    #[JsonProperty('charMap'), ArrayType([['mixed']])]
    public ?array $charMap;

    /**
     * @param array{
     *   text: string,
     *   charCount: int,
     *   charMap?: ?array<array<mixed>>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->text = $values['text'];
        $this->charCount = $values['charCount'];
        $this->charMap = $values['charMap'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
