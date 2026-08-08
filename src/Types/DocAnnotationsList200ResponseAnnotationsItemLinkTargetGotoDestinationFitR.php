<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

class DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitR extends JsonSerializableType
{
    /**
     * @var int $pageObjectNumber
     */
    #[JsonProperty('pageObjectNumber')]
    public int $pageObjectNumber;

    /**
     * @var float $left
     */
    #[JsonProperty('left')]
    public float $left;

    /**
     * @var float $bottom
     */
    #[JsonProperty('bottom')]
    public float $bottom;

    /**
     * @var float $right
     */
    #[JsonProperty('right')]
    public float $right;

    /**
     * @var float $top
     */
    #[JsonProperty('top')]
    public float $top;

    /**
     * @param array{
     *   pageObjectNumber: int,
     *   left: float,
     *   bottom: float,
     *   right: float,
     *   top: float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->pageObjectNumber = $values['pageObjectNumber'];
        $this->left = $values['left'];
        $this->bottom = $values['bottom'];
        $this->right = $values['right'];
        $this->top = $values['top'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
