<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocSignaturesAnalysis200Response extends JsonSerializableType
{
    /**
     * @var value-of<DocSignaturesAnalysis200ResponseMode> $mode
     */
    #[JsonProperty('mode')]
    public string $mode;

    /**
     * @var int $policyVersion
     */
    #[JsonProperty('policyVersion')]
    public int $policyVersion;

    /**
     * @var DocSignaturesAnalysis200ResponseBasis $basis
     */
    #[JsonProperty('basis')]
    public DocSignaturesAnalysis200ResponseBasis $basis;

    /**
     * @var DocSignaturesAnalysis200ResponseSince $since
     */
    #[JsonProperty('since')]
    public DocSignaturesAnalysis200ResponseSince $since;

    /**
     * @var DocSignaturesAnalysis200ResponseUntil $until
     */
    #[JsonProperty('until')]
    public DocSignaturesAnalysis200ResponseUntil $until;

    /**
     * @var array<DocSignaturesAnalysis200ResponseRestrictionsItem> $restrictions
     */
    #[JsonProperty('restrictions'), ArrayType([DocSignaturesAnalysis200ResponseRestrictionsItem::class])]
    public array $restrictions;

    /**
     * @var DocSignaturesAnalysis200ResponseCurrent $current
     */
    #[JsonProperty('current')]
    public DocSignaturesAnalysis200ResponseCurrent $current;

    /**
     * @var DocSignaturesAnalysis200ResponseLater $later
     */
    #[JsonProperty('later')]
    public DocSignaturesAnalysis200ResponseLater $later;

    /**
     * @var value-of<DocSignaturesAnalysis200ResponseVerdict> $verdict
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
     *   mode: value-of<DocSignaturesAnalysis200ResponseMode>,
     *   policyVersion: int,
     *   basis: DocSignaturesAnalysis200ResponseBasis,
     *   since: DocSignaturesAnalysis200ResponseSince,
     *   until: DocSignaturesAnalysis200ResponseUntil,
     *   restrictions: array<DocSignaturesAnalysis200ResponseRestrictionsItem>,
     *   current: DocSignaturesAnalysis200ResponseCurrent,
     *   later: DocSignaturesAnalysis200ResponseLater,
     *   verdict: value-of<DocSignaturesAnalysis200ResponseVerdict>,
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
