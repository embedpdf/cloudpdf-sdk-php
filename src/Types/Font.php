<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class Font extends JsonSerializableType
{
    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var value-of<FontSource> $source
     */
    #[JsonProperty('source')]
    public string $source;

    /**
     * @var string $familyName
     */
    #[JsonProperty('familyName')]
    public string $familyName;

    /**
     * @var int $weight
     */
    #[JsonProperty('weight')]
    public int $weight;

    /**
     * @var bool $italic
     */
    #[JsonProperty('italic')]
    public bool $italic;

    /**
     * @var ?string $postScriptName
     */
    #[JsonProperty('postScriptName')]
    public ?string $postScriptName;

    /**
     * @var bool $canChoose
     */
    #[JsonProperty('canChoose')]
    public bool $canChoose;

    /**
     * @var array<value-of<FontRestrictionsItem>> $restrictions
     */
    #[JsonProperty('restrictions'), ArrayType(['string'])]
    public array $restrictions;

    /**
     * @var array<FontProgram> $programs
     */
    #[JsonProperty('programs'), ArrayType([FontProgram::class])]
    public array $programs;

    /**
     * @param array{
     *   name: string,
     *   source: value-of<FontSource>,
     *   familyName: string,
     *   weight: int,
     *   italic: bool,
     *   canChoose: bool,
     *   restrictions: array<value-of<FontRestrictionsItem>>,
     *   programs: array<FontProgram>,
     *   postScriptName?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->source = $values['source'];
        $this->familyName = $values['familyName'];
        $this->weight = $values['weight'];
        $this->italic = $values['italic'];
        $this->postScriptName = $values['postScriptName'] ?? null;
        $this->canChoose = $values['canChoose'];
        $this->restrictions = $values['restrictions'];
        $this->programs = $values['programs'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
