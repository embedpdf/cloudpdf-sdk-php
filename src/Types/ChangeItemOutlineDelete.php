<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class ChangeItemOutlineDelete extends JsonSerializableType
{
    /**
     * @var OutlineMutationMeta $meta
     */
    #[JsonProperty('meta')]
    public OutlineMutationMeta $meta;

    /**
     * @param array{
     *   meta: OutlineMutationMeta,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->meta = $values['meta'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
