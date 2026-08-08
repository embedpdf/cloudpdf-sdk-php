<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

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
