<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class FontList extends JsonSerializableType
{
    /**
     * @var array<Font> $fonts
     */
    #[JsonProperty('fonts'), ArrayType([Font::class])]
    public array $fonts;

    /**
     * @var array<string> $fallbacks
     */
    #[JsonProperty('fallbacks'), ArrayType(['string'])]
    public array $fallbacks;

    /**
     * @var FontProgram $lastResort
     */
    #[JsonProperty('lastResort')]
    public FontProgram $lastResort;

    /**
     * @param array{
     *   fonts: array<Font>,
     *   fallbacks: array<string>,
     *   lastResort: FontProgram,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fonts = $values['fonts'];
        $this->fallbacks = $values['fallbacks'];
        $this->lastResort = $values['lastResort'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
