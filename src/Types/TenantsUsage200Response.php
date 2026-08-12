<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class TenantsUsage200Response extends JsonSerializableType
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
     * @var TenantsUsage200ResponseMetrics $metrics
     */
    #[JsonProperty('metrics')]
    public TenantsUsage200ResponseMetrics $metrics;

    /**
     * @param array{
     *   tenantId: string,
     *   periodStart: string,
     *   periodEnd: string,
     *   metrics: TenantsUsage200ResponseMetrics,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->tenantId = $values['tenantId'];
        $this->periodStart = $values['periodStart'];
        $this->periodEnd = $values['periodEnd'];
        $this->metrics = $values['metrics'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
