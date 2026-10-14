<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocPagesDelete200ResponseLayoutNamedPagesItem extends JsonSerializableType
{
    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var DocPagesDelete200ResponseLayoutNamedPagesItemTarget $target
     */
    #[JsonProperty('target')]
    public DocPagesDelete200ResponseLayoutNamedPagesItemTarget $target;

    /**
     * @param array{
     *   name: string,
     *   target: DocPagesDelete200ResponseLayoutNamedPagesItemTarget,
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
