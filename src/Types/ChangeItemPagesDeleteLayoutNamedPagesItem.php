<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class ChangeItemPagesDeleteLayoutNamedPagesItem extends JsonSerializableType
{
    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ChangeItemPagesDeleteLayoutNamedPagesItemTarget $target
     */
    #[JsonProperty('target')]
    public ChangeItemPagesDeleteLayoutNamedPagesItemTarget $target;

    /**
     * @param array{
     *   name: string,
     *   target: ChangeItemPagesDeleteLayoutNamedPagesItemTarget,
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
