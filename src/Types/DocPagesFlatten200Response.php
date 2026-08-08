<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

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
