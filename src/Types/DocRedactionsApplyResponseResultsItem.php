<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocRedactionsApplyResponseResultsItem extends JsonSerializableType
{
    /**
     * @var PageRef $page
     */
    #[JsonProperty('page')]
    public PageRef $page;

    /**
     * @var value-of<DocRedactionsApplyResponseResultsItemStatus> $status
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
     *   status: value-of<DocRedactionsApplyResponseResultsItemStatus>,
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
