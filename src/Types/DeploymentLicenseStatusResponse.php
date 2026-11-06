<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DeploymentLicenseStatusResponse extends JsonSerializableType
{
    /**
     * @var array<string, mixed> $license
     */
    #[JsonProperty('license'), ArrayType(['string' => 'mixed'])]
    public array $license;

    /**
     * @var ?array<string, mixed> $reporting
     */
    #[JsonProperty('reporting'), ArrayType(['string' => 'mixed'])]
    public ?array $reporting;

    /**
     * @var ?array<string, mixed> $usage
     */
    #[JsonProperty('usage'), ArrayType(['string' => 'mixed'])]
    public ?array $usage;

    /**
     * @param array{
     *   license: array<string, mixed>,
     *   reporting?: ?array<string, mixed>,
     *   usage?: ?array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->license = $values['license'];
        $this->reporting = $values['reporting'] ?? null;
        $this->usage = $values['usage'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
