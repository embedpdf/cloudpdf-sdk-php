<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocVersionsAnalysis200ResponseCurrent extends JsonSerializableType
{
    /**
     * @var value-of<DocVersionsAnalysis200ResponseCurrentVerdict> $verdict
     */
    #[JsonProperty('verdict')]
    public string $verdict;

    /**
     * @var bool $complete
     */
    #[JsonProperty('complete')]
    public bool $complete;

    /**
     * @var ?DocVersionsAnalysis200ResponseCurrentPrimary $primary
     */
    #[JsonProperty('primary')]
    public ?DocVersionsAnalysis200ResponseCurrentPrimary $primary;

    /**
     * @var array<DocVersionsAnalysis200ResponseCurrentFindingsItem> $findings
     */
    #[JsonProperty('findings'), ArrayType([DocVersionsAnalysis200ResponseCurrentFindingsItem::class])]
    public array $findings;

    /**
     * @var value-of<DocVersionsAnalysis200ResponseCurrentMethod> $method
     */
    #[JsonProperty('method')]
    public string $method;

    /**
     * @param array{
     *   verdict: value-of<DocVersionsAnalysis200ResponseCurrentVerdict>,
     *   complete: bool,
     *   findings: array<DocVersionsAnalysis200ResponseCurrentFindingsItem>,
     *   method: value-of<DocVersionsAnalysis200ResponseCurrentMethod>,
     *   primary?: ?DocVersionsAnalysis200ResponseCurrentPrimary,
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
