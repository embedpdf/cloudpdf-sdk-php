<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocFormsImportData200Response extends JsonSerializableType
{
    /**
     * @var DocFormsImportData200ResponseMeta $meta
     */
    #[JsonProperty('meta')]
    public DocFormsImportData200ResponseMeta $meta;

    /**
     * @param array{
     *   meta: DocFormsImportData200ResponseMeta,
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
