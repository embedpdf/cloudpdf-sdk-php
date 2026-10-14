<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocChanges200Response extends JsonSerializableType
{
    /**
     * @var array<DocChanges200ResponseChangesItem> $changes
     */
    #[JsonProperty('changes'), ArrayType([DocChanges200ResponseChangesItem::class])]
    public array $changes;

    /**
     * @param array{
     *   changes: array<DocChanges200ResponseChangesItem>,
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
