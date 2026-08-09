<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocPagesFlatten200Response extends JsonSerializableType
{
    /**
     * @var DocPagesFlatten200ResponseMeta $meta
     */
    #[JsonProperty('meta')]
    public DocPagesFlatten200ResponseMeta $meta;

    /**
     * @param array{
     *   meta: DocPagesFlatten200ResponseMeta,
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
