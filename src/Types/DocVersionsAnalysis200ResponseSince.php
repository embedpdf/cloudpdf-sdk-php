<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocVersionsAnalysis200ResponseSince extends JsonSerializableType
{
    /**
     * @var int $revisionIndex
     */
    #[JsonProperty('revisionIndex')]
    public int $revisionIndex;

    /**
     * @var ?int $signatureIndex
     */
    #[JsonProperty('signatureIndex')]
    public ?int $signatureIndex;

    /**
     * @param array{
     *   revisionIndex: int,
     *   signatureIndex?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->revisionIndex = $values['revisionIndex'];
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
