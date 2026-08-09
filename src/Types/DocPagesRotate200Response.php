<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocPagesRotate200Response extends JsonSerializableType
{
    /**
     * @var DocPagesRotate200ResponseMeta $meta
     */
    #[JsonProperty('meta')]
    public DocPagesRotate200ResponseMeta $meta;

    /**
     * @param array{
     *   meta: DocPagesRotate200ResponseMeta,
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
