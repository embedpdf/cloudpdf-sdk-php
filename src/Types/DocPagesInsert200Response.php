<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocPagesInsert200Response extends JsonSerializableType
{
    /**
     * @var DocPagesInsert200ResponseMeta $meta
     */
    #[JsonProperty('meta')]
    public DocPagesInsert200ResponseMeta $meta;

    /**
     * @param array{
     *   meta: DocPagesInsert200ResponseMeta,
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
