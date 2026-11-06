<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocSignaturesAnalysisResponse extends JsonSerializableType
{
    /**
     * @var value-of<DocSignaturesAnalysisResponseMode> $mode
     */
    #[JsonProperty('mode')]
    public string $mode;

    /**
     * @var int $policyVersion
     */
    #[JsonProperty('policyVersion')]
    public int $policyVersion;

    /**
     * @var DocSignaturesAnalysisResponseBasis $basis
     */
    #[JsonProperty('basis')]
    public DocSignaturesAnalysisResponseBasis $basis;

    /**
     * @var DocSignaturesAnalysisResponseSince $since
     */
    #[JsonProperty('since')]
    public DocSignaturesAnalysisResponseSince $since;

    /**
     * @var DocSignaturesAnalysisResponseUntil $until
     */
    #[JsonProperty('until')]
    public DocSignaturesAnalysisResponseUntil $until;

    /**
     * @var array<DocSignaturesAnalysisResponseRestrictionsItem> $restrictions
     */
    #[JsonProperty('restrictions'), ArrayType([DocSignaturesAnalysisResponseRestrictionsItem::class])]
    public array $restrictions;

    /**
     * @var DocSignaturesAnalysisResponseCurrent $current
     */
    #[JsonProperty('current')]
    public DocSignaturesAnalysisResponseCurrent $current;

    /**
     * @var DocSignaturesAnalysisResponseLater $later
     */
    #[JsonProperty('later')]
    public DocSignaturesAnalysisResponseLater $later;

    /**
     * @var value-of<DocSignaturesAnalysisResponseVerdict> $verdict
     */
    #[JsonProperty('verdict')]
    public string $verdict;

    /**
     * @var array<mixed> $steps
     */
    #[JsonProperty('steps'), ArrayType(['mixed'])]
    public array $steps;

    /**
     * @param array{
     *   mode: value-of<DocSignaturesAnalysisResponseMode>,
     *   policyVersion: int,
     *   basis: DocSignaturesAnalysisResponseBasis,
     *   since: DocSignaturesAnalysisResponseSince,
     *   until: DocSignaturesAnalysisResponseUntil,
     *   restrictions: array<DocSignaturesAnalysisResponseRestrictionsItem>,
     *   current: DocSignaturesAnalysisResponseCurrent,
     *   later: DocSignaturesAnalysisResponseLater,
     *   verdict: value-of<DocSignaturesAnalysisResponseVerdict>,
     *   steps: array<mixed>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->mode = $values['mode'];
        $this->policyVersion = $values['policyVersion'];
        $this->basis = $values['basis'];
        $this->since = $values['since'];
        $this->until = $values['until'];
        $this->restrictions = $values['restrictions'];
        $this->current = $values['current'];
        $this->later = $values['later'];
        $this->verdict = $values['verdict'];
        $this->steps = $values['steps'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
