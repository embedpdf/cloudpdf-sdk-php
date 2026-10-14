<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class PageDestinationFitBh extends JsonSerializableType
{
    /**
     * @var PageRef $page
     */
    #[JsonProperty('page')]
    public PageRef $page;

    /**
     * @var ?float $y
     */
    #[JsonProperty('y')]
    public ?float $y;

    /**
     * @param array{
     *   page: PageRef,
     *   y?: ?float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->page = $values['page'];
        $this->y = $values['y'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
