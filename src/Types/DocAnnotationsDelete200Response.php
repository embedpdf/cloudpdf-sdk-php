<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

class DocAnnotationsDelete200Response extends JsonSerializableType
{
    /**
     * @var DocAnnotationsDelete200ResponseMeta $meta
     */
    #[JsonProperty('meta')]
    public DocAnnotationsDelete200ResponseMeta $meta;

    /**
     * @param array{
     *   meta: DocAnnotationsDelete200ResponseMeta,
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
