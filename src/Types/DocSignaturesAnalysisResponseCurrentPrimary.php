<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocSignaturesAnalysisResponseCurrentPrimary extends JsonSerializableType
{
    /**
     * @var string $rule
     */
    #[JsonProperty('rule')]
    public string $rule;

    /**
     * @var value-of<DocSignaturesAnalysisResponseCurrentPrimaryVerdict> $verdict
     */
    #[JsonProperty('verdict')]
    public string $verdict;

    /**
     * @var int $objectNumber
     */
    #[JsonProperty('objectNumber')]
    public int $objectNumber;

    /**
     * @var ?string $edge
     */
    #[JsonProperty('edge')]
    public ?string $edge;

    /**
     * @var ?string $detail
     */
    #[JsonProperty('detail')]
    public ?string $detail;

    /**
     * @param array{
     *   rule: string,
     *   verdict: value-of<DocSignaturesAnalysisResponseCurrentPrimaryVerdict>,
     *   objectNumber: int,
     *   edge?: ?string,
     *   detail?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->rule = $values['rule'];
        $this->verdict = $values['verdict'];
        $this->objectNumber = $values['objectNumber'];
        $this->edge = $values['edge'] ?? null;
        $this->detail = $values['detail'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
