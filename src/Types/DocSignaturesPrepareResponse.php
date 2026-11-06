<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;
use DateTime;
use CloudPDF\Core\Types\Date;

class DocSignaturesPrepareResponse extends JsonSerializableType
{
    /**
     * @var string $signingId
     */
    #[JsonProperty('signingId')]
    public string $signingId;

    /**
     * @var string $digest
     */
    #[JsonProperty('digest')]
    public string $digest;

    /**
     * @var value-of<DocSignaturesPrepareResponseAlgorithm> $algorithm
     */
    #[JsonProperty('algorithm')]
    public string $algorithm;

    /**
     * @var array<mixed> $byteRange
     */
    #[JsonProperty('byteRange'), ArrayType(['mixed'])]
    public array $byteRange;

    /**
     * @var int $contentsSizeBytes
     */
    #[JsonProperty('contentsSizeBytes')]
    public int $contentsSizeBytes;

    /**
     * @var string $subFilter
     */
    #[JsonProperty('subFilter')]
    public string $subFilter;

    /**
     * @var DocSignaturesPrepareResponseExpectedVersion $expectedVersion
     */
    #[JsonProperty('expectedVersion')]
    public DocSignaturesPrepareResponseExpectedVersion $expectedVersion;

    /**
     * @var ?DateTime $expiresAt
     */
    #[JsonProperty('expiresAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $expiresAt;

    /**
     * @param array{
     *   signingId: string,
     *   digest: string,
     *   algorithm: value-of<DocSignaturesPrepareResponseAlgorithm>,
     *   byteRange: array<mixed>,
     *   contentsSizeBytes: int,
     *   subFilter: string,
     *   expectedVersion: DocSignaturesPrepareResponseExpectedVersion,
     *   expiresAt?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->signingId = $values['signingId'];
        $this->digest = $values['digest'];
        $this->algorithm = $values['algorithm'];
        $this->byteRange = $values['byteRange'];
        $this->contentsSizeBytes = $values['contentsSizeBytes'];
        $this->subFilter = $values['subFilter'];
        $this->expectedVersion = $values['expectedVersion'];
        $this->expiresAt = $values['expiresAt'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
