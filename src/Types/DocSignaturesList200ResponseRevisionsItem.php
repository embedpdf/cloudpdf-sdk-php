<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocSignaturesList200ResponseRevisionsItem extends JsonSerializableType
{
    /**
     * @var int $index
     */
    #[JsonProperty('index')]
    public int $index;

    /**
     * @var int $end
     */
    #[JsonProperty('end')]
    public int $end;

    /**
     * @var int $xrefOffset
     */
    #[JsonProperty('xrefOffset')]
    public int $xrefOffset;

    /**
     * @var ?int $signatureIndex
     */
    #[JsonProperty('signatureIndex')]
    public ?int $signatureIndex;

    /**
     * @param array{
     *   index: int,
     *   end: int,
     *   xrefOffset: int,
     *   signatureIndex?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->index = $values['index'];
        $this->end = $values['end'];
        $this->xrefOffset = $values['xrefOffset'];
        $this->signatureIndex = $values['signatureIndex'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
