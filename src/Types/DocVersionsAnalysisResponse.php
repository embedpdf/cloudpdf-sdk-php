<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocVersionsAnalysisResponse extends JsonSerializableType
{
    /**
     * @var value-of<DocVersionsAnalysisResponseMode> $mode
     */
    #[JsonProperty('mode')]
    public string $mode;

    /**
     * @var int $policyVersion
     */
    #[JsonProperty('policyVersion')]
    public int $policyVersion;

    /**
     * @var DocVersionsAnalysisResponseBasis $basis
     */
    #[JsonProperty('basis')]
    public DocVersionsAnalysisResponseBasis $basis;

    /**
     * @var DocVersionsAnalysisResponseSince $since
     */
    #[JsonProperty('since')]
    public DocVersionsAnalysisResponseSince $since;

    /**
     * @var DocVersionsAnalysisResponseUntil $until
     */
    #[JsonProperty('until')]
    public DocVersionsAnalysisResponseUntil $until;

    /**
     * @var array<DocVersionsAnalysisResponseRestrictionsItem> $restrictions
     */
    #[JsonProperty('restrictions'), ArrayType([DocVersionsAnalysisResponseRestrictionsItem::class])]
    public array $restrictions;

    /**
     * @var DocVersionsAnalysisResponseCurrent $current
     */
    #[JsonProperty('current')]
    public DocVersionsAnalysisResponseCurrent $current;

    /**
     * @var DocVersionsAnalysisResponseLater $later
     */
    #[JsonProperty('later')]
    public DocVersionsAnalysisResponseLater $later;

    /**
     * @var value-of<DocVersionsAnalysisResponseVerdict> $verdict
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
     *   mode: value-of<DocVersionsAnalysisResponseMode>,
     *   policyVersion: int,
     *   basis: DocVersionsAnalysisResponseBasis,
     *   since: DocVersionsAnalysisResponseSince,
     *   until: DocVersionsAnalysisResponseUntil,
     *   restrictions: array<DocVersionsAnalysisResponseRestrictionsItem>,
     *   current: DocVersionsAnalysisResponseCurrent,
     *   later: DocVersionsAnalysisResponseLater,
     *   verdict: value-of<DocVersionsAnalysisResponseVerdict>,
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
