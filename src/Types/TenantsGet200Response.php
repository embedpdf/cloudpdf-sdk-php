<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

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
