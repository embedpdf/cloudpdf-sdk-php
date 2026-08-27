<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocPagesInsertBlank200Response extends JsonSerializableType
{
    /**
     * @var DocPagesInsertBlank200ResponseMeta $meta
     */
    #[JsonProperty('meta')]
    public DocPagesInsertBlank200ResponseMeta $meta;

    /**
     * @param array{
     *   meta: DocPagesInsertBlank200ResponseMeta,
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
