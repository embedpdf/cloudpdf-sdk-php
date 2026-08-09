<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationXyz extends JsonSerializableType
{
    /**
     * @var int $pageObjectNumber
     */
    #[JsonProperty('pageObjectNumber')]
    public int $pageObjectNumber;

    /**
     * @var ?float $left
     */
    #[JsonProperty('left')]
    public ?float $left;

    /**
     * @var ?float $top
     */
    #[JsonProperty('top')]
    public ?float $top;

    /**
     * @var ?float $zoom
     */
    #[JsonProperty('zoom')]
    public ?float $zoom;

    /**
     * @param array{
     *   pageObjectNumber: int,
     *   left?: ?float,
     *   top?: ?float,
     *   zoom?: ?float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->pageObjectNumber = $values['pageObjectNumber'];
        $this->left = $values['left'] ?? null;
        $this->top = $values['top'] ?? null;
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
