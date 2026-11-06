<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use DateTime;
use CloudPDF\Core\Types\Date;

class GrantsVisitorsListResponseVisitorsItem extends JsonSerializableType
{
    /**
     * @var string $visitorId
     */
    #[JsonProperty('visitorId')]
    public string $visitorId;

    /**
     * @var GrantsVisitorsListResponseVisitorsItemAnswers $answers
     */
    #[JsonProperty('answers')]
    public GrantsVisitorsListResponseVisitorsItemAnswers $answers;

    /**
     * @var bool $emailVerified
     */
    #[JsonProperty('emailVerified')]
    public bool $emailVerified;

    /**
     * @var ?DateTime $consentedAt
     */
    #[JsonProperty('consentedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $consentedAt;

    /**
     * @var DateTime $firstSeenAt
     */
    #[JsonProperty('firstSeenAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $firstSeenAt;

    /**
     * @var DateTime $lastSeenAt
     */
    #[JsonProperty('lastSeenAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $lastSeenAt;

    /**
     * @var ?GrantsVisitorsListResponseVisitorsItemLayer $layer
     */
    #[JsonProperty('layer')]
    public ?GrantsVisitorsListResponseVisitorsItemLayer $layer;

    /**
     * @param array{
     *   visitorId: string,
     *   answers: GrantsVisitorsListResponseVisitorsItemAnswers,
     *   emailVerified: bool,
     *   firstSeenAt: DateTime,
     *   lastSeenAt: DateTime,
     *   consentedAt?: ?DateTime,
     *   layer?: ?GrantsVisitorsListResponseVisitorsItemLayer,
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
