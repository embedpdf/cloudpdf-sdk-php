<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class TenantsGet200Response extends JsonSerializableType
{
    /**
     * @var TenantsGet200ResponseTenant $tenant
     */
    #[JsonProperty('tenant')]
    public TenantsGet200ResponseTenant $tenant;

    /**
     * @param array{
     *   tenant: TenantsGet200ResponseTenant,
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
