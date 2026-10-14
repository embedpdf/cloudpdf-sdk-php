<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocPagesInsertBlank200ResponseLayoutNamedPagesItem extends JsonSerializableType
{
    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var DocPagesInsertBlank200ResponseLayoutNamedPagesItemTarget $target
     */
    #[JsonProperty('target')]
    public DocPagesInsertBlank200ResponseLayoutNamedPagesItemTarget $target;

    /**
     * @param array{
     *   name: string,
     *   target: DocPagesInsertBlank200ResponseLayoutNamedPagesItemTarget,
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
