<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use DateTime;
use CloudPDF\Core\Types\Date;

class DocVersionsListResponseVersionsItem extends JsonSerializableType
{
    /**
     * @var string $sha256
     */
    #[JsonProperty('sha256')]
    public string $sha256;

    /**
     * @var int $sizeBytes
     */
    #[JsonProperty('sizeBytes')]
    public int $sizeBytes;

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
     * @var value-of<DocVersionsListResponseVersionsItemProducer> $producer
     */
    #[JsonProperty('producer')]
    public string $producer;

    /**
     * @var ?string $signingId
     */
    #[JsonProperty('signingId')]
    public ?string $signingId;

    /**
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @param array{
     *   sha256: string,
     *   sizeBytes: int,
     *   number: int,
     *   producer: value-of<DocVersionsListResponseVersionsItemProducer>,
     *   createdAt: DateTime,
     *   parentSha256?: ?string,
     *   signingId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->sha256 = $values['sha256'];
        $this->sizeBytes = $values['sizeBytes'];
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
