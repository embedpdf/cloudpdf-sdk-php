<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocSignaturesAnalysisResponseCurrent extends JsonSerializableType
{
    /**
     * @var value-of<DocSignaturesAnalysisResponseCurrentVerdict> $verdict
     */
    #[JsonProperty('verdict')]
    public string $verdict;

    /**
     * @var bool $complete
     */
    #[JsonProperty('complete')]
    public bool $complete;

    /**
     * @var ?DocSignaturesAnalysisResponseCurrentPrimary $primary
     */
    #[JsonProperty('primary')]
    public ?DocSignaturesAnalysisResponseCurrentPrimary $primary;

    /**
     * @var array<DocSignaturesAnalysisResponseCurrentFindingsItem> $findings
     */
    #[JsonProperty('findings'), ArrayType([DocSignaturesAnalysisResponseCurrentFindingsItem::class])]
    public array $findings;

    /**
     * @var value-of<DocSignaturesAnalysisResponseCurrentMethod> $method
     */
    #[JsonProperty('method')]
    public string $method;

    /**
     * @param array{
     *   verdict: value-of<DocSignaturesAnalysisResponseCurrentVerdict>,
     *   complete: bool,
     *   findings: array<DocSignaturesAnalysisResponseCurrentFindingsItem>,
     *   method: value-of<DocSignaturesAnalysisResponseCurrentMethod>,
     *   primary?: ?DocSignaturesAnalysisResponseCurrentPrimary,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->verdict = $values['verdict'];
        $this->complete = $values['complete'];
        $this->primary = $values['primary'] ?? null;
        $this->findings = $values['findings'];
        $this->method = $values['method'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
