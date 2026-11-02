<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class FontResolution extends JsonSerializableType
{
    /**
     * @var array<ResolvedFontRun> $runs
     */
    #[JsonProperty('runs'), ArrayType([ResolvedFontRun::class])]
    public array $runs;

    /**
     * @var array<string> $missingCharacters
     */
    #[JsonProperty('missingCharacters'), ArrayType(['string'])]
    public array $missingCharacters;

    /**
     * @param array{
     *   runs: array<ResolvedFontRun>,
     *   missingCharacters: array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->runs = $values['runs'];
        $this->missingCharacters = $values['missingCharacters'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
