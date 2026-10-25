<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class ChangeItemPagesInsertBlankLayoutNamedPagesItem extends JsonSerializableType
{
    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ChangeItemPagesInsertBlankLayoutNamedPagesItemTarget $target
     */
    #[JsonProperty('target')]
    public ChangeItemPagesInsertBlankLayoutNamedPagesItemTarget $target;

    /**
     * @param array{
     *   name: string,
     *   target: ChangeItemPagesInsertBlankLayoutNamedPagesItemTarget,
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
