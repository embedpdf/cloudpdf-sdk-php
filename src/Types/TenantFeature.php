<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class TenantFeature extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?value-of<TenantFeatureStopped> $stopped
     */
    #[JsonProperty('stopped')]
    public ?string $stopped;

    /**
     * @param array{
     *   id: string,
     *   stopped?: ?value-of<TenantFeatureStopped>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->stopped = $values['stopped'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
