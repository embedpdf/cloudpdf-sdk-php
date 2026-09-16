<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocSignaturesAnalysis200ResponseUntil extends JsonSerializableType
{
    /**
     * @var int $revisionIndex
     */
    #[JsonProperty('revisionIndex')]
    public int $revisionIndex;

    /**
     * @param array{
     *   revisionIndex: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->revisionIndex = $values['revisionIndex'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
