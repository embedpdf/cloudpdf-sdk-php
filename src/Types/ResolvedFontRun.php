<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class ResolvedFontRun extends JsonSerializableType
{
    /**
     * @var string $font
     */
    #[JsonProperty('font')]
    public string $font;

    /**
     * @var float $weight
     */
    #[JsonProperty('weight')]
    public float $weight;

    /**
     * @var bool $italic
     */
    #[JsonProperty('italic')]
    public bool $italic;

    /**
     * @var bool $substituted
     */
    #[JsonProperty('substituted')]
    public bool $substituted;

    /**
     * @var ?string $program
     */
    #[JsonProperty('program')]
    public ?string $program;

    /**
     * @var array<string> $fallbacks
     */
    #[JsonProperty('fallbacks'), ArrayType(['string'])]
    public array $fallbacks;

    /**
     * @param array{
     *   font: string,
     *   weight: float,
     *   italic: bool,
     *   substituted: bool,
     *   fallbacks: array<string>,
     *   program?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->font = $values['font'];
        $this->weight = $values['weight'];
        $this->italic = $values['italic'];
        $this->substituted = $values['substituted'];
        $this->program = $values['program'] ?? null;
        $this->fallbacks = $values['fallbacks'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
