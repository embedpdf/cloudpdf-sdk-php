<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;
use DateTime;
use CloudPDF\Core\Types\Date;

class TenantsListResponseTenantsItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var bool $autoProvisioned
     */
    #[JsonProperty('autoProvisioned')]
    public bool $autoProvisioned;

    /**
     * @var ?value-of<TenantsListResponseTenantsItemStatus> $status
     */
    #[JsonProperty('status')]
    public ?string $status;

    /**
     * @var ?array<TenantFeature> $features
     */
    #[JsonProperty('features'), ArrayType([TenantFeature::class])]
    public ?array $features;

    /**
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @param array{
     *   id: string,
     *   name: string,
     *   autoProvisioned: bool,
     *   createdAt: DateTime,
     *   status?: ?value-of<TenantsListResponseTenantsItemStatus>,
     *   features?: ?array<TenantFeature>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->name = $values['name'];
        $this->autoProvisioned = $values['autoProvisioned'];
        $this->status = $values['status'] ?? null;
        $this->features = $values['features'] ?? null;
        $this->createdAt = $values['createdAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
