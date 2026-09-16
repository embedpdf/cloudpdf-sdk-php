<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocVersionsList200ResponseVersionsItem extends JsonSerializableType
{
    /**
     * @var string $sha256
     */
    #[JsonProperty('sha256')]
    public string $sha256;

    /**
     * @var int $byteLength
     */
    #[JsonProperty('byteLength')]
    public int $byteLength;

    /**
     * @var int $number
     */
    #[JsonProperty('number')]
    public int $number;

    /**
     * @var ?string $parentSha256
     */
    #[JsonProperty('parentSha256')]
    public ?string $parentSha256;

    /**
     * @var value-of<DocVersionsList200ResponseVersionsItemProducer> $producer
     */
    #[JsonProperty('producer')]
    public string $producer;

    /**
     * @var ?string $signingId
     */
    #[JsonProperty('signingId')]
    public ?string $signingId;

    /**
     * @var int $createdAt
     */
    #[JsonProperty('createdAt')]
    public int $createdAt;

    /**
     * @param array{
     *   sha256: string,
     *   byteLength: int,
     *   number: int,
     *   producer: value-of<DocVersionsList200ResponseVersionsItemProducer>,
     *   createdAt: int,
     *   parentSha256?: ?string,
     *   signingId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->sha256 = $values['sha256'];
        $this->byteLength = $values['byteLength'];
        $this->number = $values['number'];
        $this->parentSha256 = $values['parentSha256'] ?? null;
        $this->producer = $values['producer'];
        $this->signingId = $values['signingId'] ?? null;
        $this->createdAt = $values['createdAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
