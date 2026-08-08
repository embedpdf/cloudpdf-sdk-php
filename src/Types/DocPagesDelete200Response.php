<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

class DocPagesDelete200Response extends JsonSerializableType
{
    /**
     * @var DocPagesDelete200ResponseMeta $meta
     */
    #[JsonProperty('meta')]
    public DocPagesDelete200ResponseMeta $meta;

    /**
     * @param array{
     *   meta: DocPagesDelete200ResponseMeta,
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
