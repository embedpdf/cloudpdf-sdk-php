<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocPagesFlattenResponseResultsItem extends JsonSerializableType
{
    /**
     * @var PageRef $page
     */
    #[JsonProperty('page')]
    public PageRef $page;

    /**
     * @var value-of<DocPagesFlattenResponseResultsItemStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @param array{
     *   page: PageRef,
     *   status: value-of<DocPagesFlattenResponseResultsItemStatus>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->page = $values['page'];
        $this->status = $values['status'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
