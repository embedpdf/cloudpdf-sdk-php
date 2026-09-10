<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocPagesRemoveName200Response extends JsonSerializableType
{
    /**
     * @var DocPagesRemoveName200ResponseMeta $meta
     */
    #[JsonProperty('meta')]
    public DocPagesRemoveName200ResponseMeta $meta;

    /**
     * @param array{
     *   meta: DocPagesRemoveName200ResponseMeta,
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
