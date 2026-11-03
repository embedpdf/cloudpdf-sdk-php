<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class TenantsUpdate200Response extends JsonSerializableType
{
    /**
     * @var TenantsUpdate200ResponseTenant $tenant
     */
    #[JsonProperty('tenant')]
    public TenantsUpdate200ResponseTenant $tenant;

    /**
     * @param array{
     *   tenant: TenantsUpdate200ResponseTenant,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->tenant = $values['tenant'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
