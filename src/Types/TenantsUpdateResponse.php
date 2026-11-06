<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class TenantsUpdateResponse extends JsonSerializableType
{
    /**
     * @var TenantsUpdateResponseTenant $tenant
     */
    #[JsonProperty('tenant')]
    public TenantsUpdateResponseTenant $tenant;

    /**
     * @param array{
     *   tenant: TenantsUpdateResponseTenant,
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
