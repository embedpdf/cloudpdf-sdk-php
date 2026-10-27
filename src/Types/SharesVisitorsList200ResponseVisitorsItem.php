<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class SharesVisitorsList200ResponseVisitorsItem extends JsonSerializableType
{
    /**
     * @var string $visitorId
     */
    #[JsonProperty('visitorId')]
    public string $visitorId;

    /**
     * @var SharesVisitorsList200ResponseVisitorsItemAnswers $answers
     */
    #[JsonProperty('answers')]
    public SharesVisitorsList200ResponseVisitorsItemAnswers $answers;

    /**
     * @var bool $emailVerified
     */
    #[JsonProperty('emailVerified')]
    public bool $emailVerified;

    /**
     * @var ?float $consentedAt
     */
    #[JsonProperty('consentedAt')]
    public ?float $consentedAt;

    /**
     * @var float $firstSeenAt
     */
    #[JsonProperty('firstSeenAt')]
    public float $firstSeenAt;

    /**
     * @var float $lastSeenAt
     */
    #[JsonProperty('lastSeenAt')]
    public float $lastSeenAt;

    /**
     * @var ?SharesVisitorsList200ResponseVisitorsItemLayer $layer
     */
    #[JsonProperty('layer')]
    public ?SharesVisitorsList200ResponseVisitorsItemLayer $layer;

    /**
     * @param array{
     *   visitorId: string,
     *   answers: SharesVisitorsList200ResponseVisitorsItemAnswers,
     *   emailVerified: bool,
     *   firstSeenAt: float,
     *   lastSeenAt: float,
     *   consentedAt?: ?float,
     *   layer?: ?SharesVisitorsList200ResponseVisitorsItemLayer,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->visitorId = $values['visitorId'];
        $this->answers = $values['answers'];
        $this->emailVerified = $values['emailVerified'];
        $this->consentedAt = $values['consentedAt'] ?? null;
        $this->firstSeenAt = $values['firstSeenAt'];
        $this->lastSeenAt = $values['lastSeenAt'];
        $this->layer = $values['layer'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
