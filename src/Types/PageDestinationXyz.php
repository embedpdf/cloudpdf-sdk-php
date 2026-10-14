<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class PageDestinationXyz extends JsonSerializableType
{
    /**
     * @var PageRef $page
     */
    #[JsonProperty('page')]
    public PageRef $page;

    /**
     * @var ?float $x
     */
    #[JsonProperty('x')]
    public ?float $x;

    /**
     * @var ?float $y
     */
    #[JsonProperty('y')]
    public ?float $y;

    /**
     * @var ?float $zoom
     */
    #[JsonProperty('zoom')]
    public ?float $zoom;

    /**
     * @param array{
     *   page: PageRef,
     *   x?: ?float,
     *   y?: ?float,
     *   zoom?: ?float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->page = $values['page'];
        $this->x = $values['x'] ?? null;
        $this->y = $values['y'] ?? null;
        $this->zoom = $values['zoom'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
