<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocPagesSetNameResponseLayoutNamedPagesItem extends JsonSerializableType
{
    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var DocPagesSetNameResponseLayoutNamedPagesItemTarget $target
     */
    #[JsonProperty('target')]
    public DocPagesSetNameResponseLayoutNamedPagesItemTarget $target;

    /**
     * @param array{
     *   name: string,
     *   target: DocPagesSetNameResponseLayoutNamedPagesItemTarget,
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
