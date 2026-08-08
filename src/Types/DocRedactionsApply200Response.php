<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

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
