<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocPagesDelete200Response extends JsonSerializableType
{
    /**
     * @var DocPagesDelete200ResponseLayout $layout
     */
    #[JsonProperty('layout')]
    public DocPagesDelete200ResponseLayout $layout;

    /**
     * @var MutationMeta $meta
     */
    #[JsonProperty('meta')]
    public MutationMeta $meta;

    /**
     * @param array{
     *   layout: DocPagesDelete200ResponseLayout,
     *   meta: MutationMeta,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->layout = $values['layout'];
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
