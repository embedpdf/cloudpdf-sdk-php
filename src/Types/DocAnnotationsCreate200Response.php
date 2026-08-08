<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

class DocAnnotationsCreate200Response extends JsonSerializableType
{
    /**
     * @var DocAnnotationsCreate200ResponseMeta $meta
     */
    #[JsonProperty('meta')]
    public DocAnnotationsCreate200ResponseMeta $meta;

    /**
     * @param array{
     *   meta: DocAnnotationsCreate200ResponseMeta,
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
