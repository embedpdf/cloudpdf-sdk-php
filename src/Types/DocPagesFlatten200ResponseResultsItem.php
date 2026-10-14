<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocPagesFlatten200ResponseResultsItem extends JsonSerializableType
{
    /**
     * @var PageRef $page
     */
    #[JsonProperty('page')]
    public PageRef $page;

    /**
     * @var value-of<DocPagesFlatten200ResponseResultsItemStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @param array{
     *   page: PageRef,
     *   status: value-of<DocPagesFlatten200ResponseResultsItemStatus>,
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
