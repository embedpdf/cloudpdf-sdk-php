<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocPagesInsertBlank200Response extends JsonSerializableType
{
    /**
     * @var array<PageRef> $insertedPages
     */
    #[JsonProperty('insertedPages'), ArrayType([PageRef::class])]
    public array $insertedPages;

    /**
     * @var DocPagesInsertBlank200ResponseLayout $layout
     */
    #[JsonProperty('layout')]
    public DocPagesInsertBlank200ResponseLayout $layout;

    /**
     * @var MutationMeta $meta
     */
    #[JsonProperty('meta')]
    public MutationMeta $meta;

    /**
     * @param array{
     *   insertedPages: array<PageRef>,
     *   layout: DocPagesInsertBlank200ResponseLayout,
     *   meta: MutationMeta,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->insertedPages = $values['insertedPages'];
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
