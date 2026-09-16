<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocSignaturesList200ResponseSignaturesItemSigner extends JsonSerializableType
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
     * @var ?string $claimedTime
     */
    #[JsonProperty('claimedTime')]
    public ?string $claimedTime;

    /**
     * @param array{
     *   name?: ?string,
     *   reason?: ?string,
     *   location?: ?string,
     *   contactInfo?: ?string,
     *   claimedTime?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->name = $values['name'] ?? null;
        $this->reason = $values['reason'] ?? null;
        $this->location = $values['location'] ?? null;
        $this->contactInfo = $values['contactInfo'] ?? null;
        $this->claimedTime = $values['claimedTime'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
