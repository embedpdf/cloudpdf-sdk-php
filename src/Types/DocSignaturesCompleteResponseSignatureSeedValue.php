<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocSignaturesCompleteResponseSignatureSeedValue extends JsonSerializableType
{
    /**
     * @var ?int $parserVersion
     */
    #[JsonProperty('parserVersion')]
    public ?int $parserVersion;

    /**
     * @var bool $parserVersionRequired
     */
    #[JsonProperty('parserVersionRequired')]
    public bool $parserVersionRequired;

    /**
     * @var ?int $mdp
     */
    #[JsonProperty('mdp')]
    public ?int $mdp;

    /**
     * @var ?string $filter
     */
    #[JsonProperty('filter')]
    public ?string $filter;

    /**
     * @var bool $filterRequired
     */
    #[JsonProperty('filterRequired')]
    public bool $filterRequired;

    /**
     * @var array<string> $subFilters
     */
    #[JsonProperty('subFilters'), ArrayType(['string'])]
    public array $subFilters;

    /**
     * @var bool $subFiltersRequired
     */
    #[JsonProperty('subFiltersRequired')]
    public bool $subFiltersRequired;

    /**
     * @var array<string> $digestMethods
     */
    #[JsonProperty('digestMethods'), ArrayType(['string'])]
    public array $digestMethods;

    /**
     * @var bool $digestMethodsRequired
     */
    #[JsonProperty('digestMethodsRequired')]
    public bool $digestMethodsRequired;

    /**
     * @var array<string> $reasons
     */
    #[JsonProperty('reasons'), ArrayType(['string'])]
    public array $reasons;

    /**
     * @var bool $reasonsRequired
     */
    #[JsonProperty('reasonsRequired')]
    public bool $reasonsRequired;

    /**
     * @var bool $unsupportedRequired
     */
    #[JsonProperty('unsupportedRequired')]
    public bool $unsupportedRequired;

    /**
     * @param array{
     *   parserVersionRequired: bool,
     *   filterRequired: bool,
     *   subFilters: array<string>,
     *   subFiltersRequired: bool,
     *   digestMethods: array<string>,
     *   digestMethodsRequired: bool,
     *   reasons: array<string>,
     *   reasonsRequired: bool,
     *   unsupportedRequired: bool,
     *   parserVersion?: ?int,
     *   mdp?: ?int,
     *   filter?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->parserVersion = $values['parserVersion'] ?? null;
        $this->parserVersionRequired = $values['parserVersionRequired'];
        $this->mdp = $values['mdp'] ?? null;
        $this->filter = $values['filter'] ?? null;
        $this->filterRequired = $values['filterRequired'];
        $this->subFilters = $values['subFilters'];
        $this->subFiltersRequired = $values['subFiltersRequired'];
        $this->digestMethods = $values['digestMethods'];
        $this->digestMethodsRequired = $values['digestMethodsRequired'];
        $this->reasons = $values['reasons'];
        $this->reasonsRequired = $values['reasonsRequired'];
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
