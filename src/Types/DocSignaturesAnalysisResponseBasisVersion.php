<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocSignaturesAnalysisResponseBasisVersion extends JsonSerializableType
{
    /**
     * @var string $sha256
     */
    #[JsonProperty('sha256')]
    public string $sha256;

    /**
     * @var int $sizeBytes
     */
    #[JsonProperty('sizeBytes')]
    public int $sizeBytes;

    /**
     * @param array{
     *   sha256: string,
     *   sizeBytes: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->sha256 = $values['sha256'];
        $this->sizeBytes = $values['sizeBytes'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
