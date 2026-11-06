<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class TenantsCreateResponse extends JsonSerializableType
{
    /**
     * @var TenantsCreateResponseTenant $tenant
     */
    #[JsonProperty('tenant')]
    public TenantsCreateResponseTenant $tenant;

    /**
     * @var bool $created
     */
    #[JsonProperty('created')]
    public bool $created;

    /**
     * @param array{
     *   tenant: TenantsCreateResponseTenant,
     *   created: bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->tenant = $values['tenant'];
        $this->created = $values['created'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
