<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

class TenantsCreate200Response extends JsonSerializableType
{
    /**
     * @var TenantsCreate200ResponseTenant $tenant
     */
    #[JsonProperty('tenant')]
    public TenantsCreate200ResponseTenant $tenant;

    /**
     * @var bool $created
     */
    #[JsonProperty('created')]
    public bool $created;

    /**
     * @param array{
     *   tenant: TenantsCreate200ResponseTenant,
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
