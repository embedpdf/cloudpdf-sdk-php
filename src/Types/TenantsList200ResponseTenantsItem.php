<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class TenantsList200ResponseTenantsItem extends JsonSerializableType
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
     * @var float $createdAt
     */
    #[JsonProperty('createdAt')]
    public float $createdAt;

    /**
     * @param array{
     *   id: string,
     *   name: string,
     *   autoProvisioned: bool,
     *   createdAt: float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->name = $values['name'];
        $this->autoProvisioned = $values['autoProvisioned'];
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
