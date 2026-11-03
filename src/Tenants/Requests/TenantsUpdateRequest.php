<?php

namespace CloudPDF\Tenants\Requests;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Types\TenantFeature;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class TenantsUpdateRequest extends JsonSerializableType
{
    /**
     * @var array<TenantFeature> $features
     */
    #[JsonProperty('features'), ArrayType([TenantFeature::class])]
    public array $features;

    /**
     * @param array{
     *   features: array<TenantFeature>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->features = $values['features'];
    }
}
