<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class TenantsGetResponse extends JsonSerializableType
{
    /**
     * @var TenantsGetResponseTenant $tenant
     */
    #[JsonProperty('tenant')]
    public TenantsGetResponseTenant $tenant;

    /**
     * @param array{
     *   tenant: TenantsGetResponseTenant,
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
