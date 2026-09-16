<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocVersionsAnalysis200Response extends JsonSerializableType
{
    /**
     * @var value-of<DocVersionsAnalysis200ResponseMode> $mode
     */
    #[JsonProperty('mode')]
    public string $mode;

    /**
     * @var int $policyVersion
     */
    #[JsonProperty('policyVersion')]
    public int $policyVersion;

    /**
     * @var DocVersionsAnalysis200ResponseBasis $basis
     */
    #[JsonProperty('basis')]
    public DocVersionsAnalysis200ResponseBasis $basis;

    /**
     * @var DocVersionsAnalysis200ResponseSince $since
     */
    #[JsonProperty('since')]
    public DocVersionsAnalysis200ResponseSince $since;

    /**
     * @var DocVersionsAnalysis200ResponseUntil $until
     */
    #[JsonProperty('until')]
    public DocVersionsAnalysis200ResponseUntil $until;

    /**
     * @var array<DocVersionsAnalysis200ResponseRestrictionsItem> $restrictions
     */
    #[JsonProperty('restrictions'), ArrayType([DocVersionsAnalysis200ResponseRestrictionsItem::class])]
    public array $restrictions;

    /**
     * @var DocVersionsAnalysis200ResponseCurrent $current
     */
    #[JsonProperty('current')]
    public DocVersionsAnalysis200ResponseCurrent $current;

    /**
     * @var DocVersionsAnalysis200ResponseLater $later
     */
    #[JsonProperty('later')]
    public DocVersionsAnalysis200ResponseLater $later;

    /**
     * @var value-of<DocVersionsAnalysis200ResponseVerdict> $verdict
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
     *   mode: value-of<DocVersionsAnalysis200ResponseMode>,
     *   policyVersion: int,
     *   basis: DocVersionsAnalysis200ResponseBasis,
     *   since: DocVersionsAnalysis200ResponseSince,
     *   until: DocVersionsAnalysis200ResponseUntil,
     *   restrictions: array<DocVersionsAnalysis200ResponseRestrictionsItem>,
     *   current: DocVersionsAnalysis200ResponseCurrent,
     *   later: DocVersionsAnalysis200ResponseLater,
     *   verdict: value-of<DocVersionsAnalysis200ResponseVerdict>,
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
