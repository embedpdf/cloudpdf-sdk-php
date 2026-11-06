<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocVersionsAnalysisResponseCurrent extends JsonSerializableType
{
    /**
     * @var value-of<DocVersionsAnalysisResponseCurrentVerdict> $verdict
     */
    #[JsonProperty('verdict')]
    public string $verdict;

    /**
     * @var bool $complete
     */
    #[JsonProperty('complete')]
    public bool $complete;

    /**
     * @var ?DocVersionsAnalysisResponseCurrentPrimary $primary
     */
    #[JsonProperty('primary')]
    public ?DocVersionsAnalysisResponseCurrentPrimary $primary;

    /**
     * @var array<DocVersionsAnalysisResponseCurrentFindingsItem> $findings
     */
    #[JsonProperty('findings'), ArrayType([DocVersionsAnalysisResponseCurrentFindingsItem::class])]
    public array $findings;

    /**
     * @var value-of<DocVersionsAnalysisResponseCurrentMethod> $method
     */
    #[JsonProperty('method')]
    public string $method;

    /**
     * @param array{
     *   verdict: value-of<DocVersionsAnalysisResponseCurrentVerdict>,
     *   complete: bool,
     *   findings: array<DocVersionsAnalysisResponseCurrentFindingsItem>,
     *   method: value-of<DocVersionsAnalysisResponseCurrentMethod>,
     *   primary?: ?DocVersionsAnalysisResponseCurrentPrimary,
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
