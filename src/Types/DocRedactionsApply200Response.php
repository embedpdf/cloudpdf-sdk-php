<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocRedactionsApply200Response extends JsonSerializableType
{
    /**
     * @var DocRedactionsApply200ResponseMeta $meta
     */
    #[JsonProperty('meta')]
    public DocRedactionsApply200ResponseMeta $meta;

    /**
     * @param array{
     *   meta: DocRedactionsApply200ResponseMeta,
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
