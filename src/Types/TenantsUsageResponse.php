<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class TenantsUsageResponse extends JsonSerializableType
{
    /**
     * @var string $tenantId
     */
    #[JsonProperty('tenantId')]
    public string $tenantId;

    /**
     * @var string $periodStart
     */
    #[JsonProperty('periodStart')]
    public string $periodStart;

    /**
     * @var string $periodEnd
     */
    #[JsonProperty('periodEnd')]
    public string $periodEnd;

    /**
     * @var TenantsUsageResponseMetrics $metrics
     */
    #[JsonProperty('metrics')]
    public TenantsUsageResponseMetrics $metrics;

    /**
     * @var array<string, int> $moduleMeters
     */
    #[JsonProperty('moduleMeters'), ArrayType(['string' => 'integer'])]
    public array $moduleMeters;

    /**
     * @param array{
     *   tenantId: string,
     *   periodStart: string,
     *   periodEnd: string,
     *   metrics: TenantsUsageResponseMetrics,
     *   moduleMeters: array<string, int>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->tenantId = $values['tenantId'];
        $this->periodStart = $values['periodStart'];
        $this->periodEnd = $values['periodEnd'];
        $this->metrics = $values['metrics'];
        $this->moduleMeters = $values['moduleMeters'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
