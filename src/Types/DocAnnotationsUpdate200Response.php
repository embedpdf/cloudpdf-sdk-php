<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocAnnotationsUpdate200Response extends JsonSerializableType
{
    /**
     * @var DocAnnotationsUpdate200ResponseMeta $meta
     */
    #[JsonProperty('meta')]
    public DocAnnotationsUpdate200ResponseMeta $meta;

    /**
     * @param array{
     *   meta: DocAnnotationsUpdate200ResponseMeta,
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
