<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocFormsReset200Response extends JsonSerializableType
{
    /**
     * @var DocFormsReset200ResponseMeta $meta
     */
    #[JsonProperty('meta')]
    public DocFormsReset200ResponseMeta $meta;

    /**
     * @param array{
     *   meta: DocFormsReset200ResponseMeta,
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
