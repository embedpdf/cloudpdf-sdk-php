<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocPagesReorder200ResponseLayoutNamedPagesItem extends JsonSerializableType
{
    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var DocPagesReorder200ResponseLayoutNamedPagesItemTarget $target
     */
    #[JsonProperty('target')]
    public DocPagesReorder200ResponseLayoutNamedPagesItemTarget $target;

    /**
     * @param array{
     *   name: string,
     *   target: DocPagesReorder200ResponseLayoutNamedPagesItemTarget,
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
