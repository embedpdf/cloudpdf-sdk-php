<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocPagesSetName200Response extends JsonSerializableType
{
    /**
     * @var DocPagesSetName200ResponseMeta $meta
     */
    #[JsonProperty('meta')]
    public DocPagesSetName200ResponseMeta $meta;

    /**
     * @param array{
     *   meta: DocPagesSetName200ResponseMeta,
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
