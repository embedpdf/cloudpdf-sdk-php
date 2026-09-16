<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocSignaturesPrepare200Response extends JsonSerializableType
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
     * @var value-of<DocSignaturesPrepare200ResponseAlgorithm> $algorithm
     */
    #[JsonProperty('algorithm')]
    public string $algorithm;

    /**
     * @var array<mixed> $byteRange
     */
    #[JsonProperty('byteRange'), ArrayType(['mixed'])]
    public array $byteRange;

    /**
     * @var int $contentsSize
     */
    #[JsonProperty('contentsSize')]
    public int $contentsSize;

    /**
     * @var string $subFilter
     */
    #[JsonProperty('subFilter')]
    public string $subFilter;

    /**
     * @var DocSignaturesPrepare200ResponseExpectedVersion $expectedVersion
     */
    #[JsonProperty('expectedVersion')]
    public DocSignaturesPrepare200ResponseExpectedVersion $expectedVersion;

    /**
     * @var ?string $expiresAt
     */
    #[JsonProperty('expiresAt')]
    public ?string $expiresAt;

    /**
     * @param array{
     *   signingId: string,
     *   digest: string,
     *   algorithm: value-of<DocSignaturesPrepare200ResponseAlgorithm>,
     *   byteRange: array<mixed>,
     *   contentsSize: int,
     *   subFilter: string,
     *   expectedVersion: DocSignaturesPrepare200ResponseExpectedVersion,
     *   expiresAt?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->signingId = $values['signingId'];
        $this->digest = $values['digest'];
        $this->algorithm = $values['algorithm'];
        $this->byteRange = $values['byteRange'];
        $this->contentsSize = $values['contentsSize'];
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
