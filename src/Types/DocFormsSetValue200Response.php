<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

class DocFormsSetValue200Response extends JsonSerializableType
{
    /**
     * @var DocFormsSetValue200ResponseMeta $meta
     */
    #[JsonProperty('meta')]
    public DocFormsSetValue200ResponseMeta $meta;

    /**
     * @param array{
     *   meta: DocFormsSetValue200ResponseMeta,
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
