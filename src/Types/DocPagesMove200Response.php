<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocPagesMove200Response extends JsonSerializableType
{
    /**
     * @var DocPagesMove200ResponseMeta $meta
     */
    #[JsonProperty('meta')]
    public DocPagesMove200ResponseMeta $meta;

    /**
     * @param array{
     *   meta: DocPagesMove200ResponseMeta,
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
