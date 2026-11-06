<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocPagesSetNameResponse extends JsonSerializableType
{
    /**
     * @var DocPagesSetNameResponseLayout $layout
     */
    #[JsonProperty('layout')]
    public DocPagesSetNameResponseLayout $layout;

    /**
     * @var MutationMeta $meta
     */
    #[JsonProperty('meta')]
    public MutationMeta $meta;

    /**
     * @param array{
     *   layout: DocPagesSetNameResponseLayout,
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
