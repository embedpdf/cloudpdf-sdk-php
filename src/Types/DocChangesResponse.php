<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocChangesResponse extends JsonSerializableType
{
    /**
     * @var array<DocChangesResponseChangesItem> $changes
     */
    #[JsonProperty('changes'), ArrayType([DocChangesResponseChangesItem::class])]
    public array $changes;

    /**
     * @param array{
     *   changes: array<DocChangesResponseChangesItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->changes = $values['changes'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
