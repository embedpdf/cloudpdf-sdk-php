<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocPagesSetName200ResponseLayoutNamedPagesItemTargetPage extends JsonSerializableType
{
    /**
     * @var PageRef $page
     */
    #[JsonProperty('page')]
    public PageRef $page;

    /**
     * @param array{
     *   page: PageRef,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->page = $values['page'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
