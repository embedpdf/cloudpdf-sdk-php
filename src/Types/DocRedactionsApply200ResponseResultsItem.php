<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocRedactionsApply200ResponseResultsItem extends JsonSerializableType
{
    /**
     * @var PageRef $page
     */
    #[JsonProperty('page')]
    public PageRef $page;

    /**
     * @var value-of<DocRedactionsApply200ResponseResultsItemStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var int $removedAnnotationCount
     */
    #[JsonProperty('removedAnnotationCount')]
    public int $removedAnnotationCount;

    /**
     * @param array{
     *   page: PageRef,
     *   status: value-of<DocRedactionsApply200ResponseResultsItemStatus>,
     *   removedAnnotationCount: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->page = $values['page'];
        $this->status = $values['status'];
        $this->removedAnnotationCount = $values['removedAnnotationCount'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
