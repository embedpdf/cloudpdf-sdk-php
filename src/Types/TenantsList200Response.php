<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;
use Cloudpdf\Core\Types\ArrayType;

class TenantsList200Response extends JsonSerializableType
{
    /**
     * @var array<TenantsList200ResponseTenantsItem> $tenants
     */
    #[JsonProperty('tenants'), ArrayType([TenantsList200ResponseTenantsItem::class])]
    public array $tenants;

    /**
     * @var ?string $nextCursor
     */
    #[JsonProperty('nextCursor')]
    public ?string $nextCursor;

    /**
     * @param array{
     *   tenants: array<TenantsList200ResponseTenantsItem>,
     *   nextCursor?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->tenants = $values['tenants'];
        $this->nextCursor = $values['nextCursor'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
