<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class PageListSnapshotNamedPagesItem extends JsonSerializableType
{
    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var PageListSnapshotNamedPagesItemTarget $target
     */
    #[JsonProperty('target')]
    public PageListSnapshotNamedPagesItemTarget $target;

    /**
     * @param array{
     *   name: string,
     *   target: PageListSnapshotNamedPagesItemTarget,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->target = $values['target'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
