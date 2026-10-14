<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use DateTime;
use CloudPDF\Core\Types\Date;

class DocSignaturesComplete200ResponseSignatureSigner extends JsonSerializableType
{
    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $reason
     */
    #[JsonProperty('reason')]
    public ?string $reason;

    /**
     * @var ?string $location
     */
    #[JsonProperty('location')]
    public ?string $location;

    /**
     * @var ?string $contactInfo
     */
    #[JsonProperty('contactInfo')]
    public ?string $contactInfo;

    /**
     * @var ?DateTime $signedAt
     */
    #[JsonProperty('signedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $signedAt;

    /**
     * @param array{
     *   name?: ?string,
     *   reason?: ?string,
     *   location?: ?string,
     *   contactInfo?: ?string,
     *   signedAt?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->name = $values['name'] ?? null;
        $this->reason = $values['reason'] ?? null;
        $this->location = $values['location'] ?? null;
        $this->contactInfo = $values['contactInfo'] ?? null;
        $this->signedAt = $values['signedAt'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
