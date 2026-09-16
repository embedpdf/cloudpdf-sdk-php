<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocSignaturesComplete200ResponseSignatureSeedValue extends JsonSerializableType
{
    /**
     * @var int $requiredFlags
     */
    #[JsonProperty('requiredFlags')]
    public int $requiredFlags;

    /**
     * @var int $presentFlags
     */
    #[JsonProperty('presentFlags')]
    public int $presentFlags;

    /**
     * @var ?int $version
     */
    #[JsonProperty('version')]
    public ?int $version;

    /**
     * @var ?float $mdp
     */
    #[JsonProperty('mdp')]
    public ?float $mdp;

    /**
     * @var ?string $filter
     */
    #[JsonProperty('filter')]
    public ?string $filter;

    /**
     * @var array<string> $subFilters
     */
    #[JsonProperty('subFilters'), ArrayType(['string'])]
    public array $subFilters;

    /**
     * @var array<string> $digestMethods
     */
    #[JsonProperty('digestMethods'), ArrayType(['string'])]
    public array $digestMethods;

    /**
     * @var array<string> $reasons
     */
    #[JsonProperty('reasons'), ArrayType(['string'])]
    public array $reasons;

    /**
     * @var bool $unsupportedRequired
     */
    #[JsonProperty('unsupportedRequired')]
    public bool $unsupportedRequired;

    /**
     * @param array{
     *   requiredFlags: int,
     *   presentFlags: int,
     *   subFilters: array<string>,
     *   digestMethods: array<string>,
     *   reasons: array<string>,
     *   unsupportedRequired: bool,
     *   version?: ?int,
     *   mdp?: ?float,
     *   filter?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->requiredFlags = $values['requiredFlags'];
        $this->presentFlags = $values['presentFlags'];
        $this->version = $values['version'] ?? null;
        $this->mdp = $values['mdp'] ?? null;
        $this->filter = $values['filter'] ?? null;
        $this->subFilters = $values['subFilters'];
        $this->digestMethods = $values['digestMethods'];
        $this->reasons = $values['reasons'];
        $this->unsupportedRequired = $values['unsupportedRequired'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
