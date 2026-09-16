<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocSignaturesAnalysis200ResponseCurrent extends JsonSerializableType
{
    /**
     * @var value-of<DocSignaturesAnalysis200ResponseCurrentVerdict> $verdict
     */
    #[JsonProperty('verdict')]
    public string $verdict;

    /**
     * @var bool $complete
     */
    #[JsonProperty('complete')]
    public bool $complete;

    /**
     * @var ?DocSignaturesAnalysis200ResponseCurrentPrimary $primary
     */
    #[JsonProperty('primary')]
    public ?DocSignaturesAnalysis200ResponseCurrentPrimary $primary;

    /**
     * @var array<DocSignaturesAnalysis200ResponseCurrentFindingsItem> $findings
     */
    #[JsonProperty('findings'), ArrayType([DocSignaturesAnalysis200ResponseCurrentFindingsItem::class])]
    public array $findings;

    /**
     * @var value-of<DocSignaturesAnalysis200ResponseCurrentMethod> $method
     */
    #[JsonProperty('method')]
    public string $method;

    /**
     * @param array{
     *   verdict: value-of<DocSignaturesAnalysis200ResponseCurrentVerdict>,
     *   complete: bool,
     *   findings: array<DocSignaturesAnalysis200ResponseCurrentFindingsItem>,
     *   method: value-of<DocSignaturesAnalysis200ResponseCurrentMethod>,
     *   primary?: ?DocSignaturesAnalysis200ResponseCurrentPrimary,
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
