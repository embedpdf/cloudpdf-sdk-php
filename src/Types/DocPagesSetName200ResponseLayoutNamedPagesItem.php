<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocPagesSetName200ResponseLayoutNamedPagesItem extends JsonSerializableType
{
    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var DocPagesSetName200ResponseLayoutNamedPagesItemTarget $target
     */
    #[JsonProperty('target')]
    public DocPagesSetName200ResponseLayoutNamedPagesItemTarget $target;

    /**
     * @param array{
     *   name: string,
     *   target: DocPagesSetName200ResponseLayoutNamedPagesItemTarget,
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
