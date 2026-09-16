<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocVersionsAnalysis200ResponseLater extends JsonSerializableType
{
    /**
     * @var int $revisionCount
     */
    #[JsonProperty('revisionCount')]
    public int $revisionCount;

    /**
     * @var array<int> $undoneObjectNumbers
     */
    #[JsonProperty('undoneObjectNumbers'), ArrayType(['integer'])]
    public array $undoneObjectNumbers;

    /**
     * @param array{
     *   revisionCount: int,
     *   undoneObjectNumbers: array<int>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->revisionCount = $values['revisionCount'];
        $this->undoneObjectNumbers = $values['undoneObjectNumbers'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
