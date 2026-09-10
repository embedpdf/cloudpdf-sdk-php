<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocAnnotationsFlatten200Response extends JsonSerializableType
{
    /**
     * @var DocAnnotationsFlatten200ResponseMeta $meta
     */
    #[JsonProperty('meta')]
    public DocAnnotationsFlatten200ResponseMeta $meta;

    /**
     * @param array{
     *   meta: DocAnnotationsFlatten200ResponseMeta,
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
