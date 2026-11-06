<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class TenantsListResponse extends JsonSerializableType
{
    /**
     * @var array<TenantsListResponseTenantsItem> $tenants
     */
    #[JsonProperty('tenants'), ArrayType([TenantsListResponseTenantsItem::class])]
    public array $tenants;

    /**
     * @var ?string $nextCursor
     */
    #[JsonProperty('nextCursor')]
    public ?string $nextCursor;

    /**
     * @param array{
     *   tenants: array<TenantsListResponseTenantsItem>,
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
