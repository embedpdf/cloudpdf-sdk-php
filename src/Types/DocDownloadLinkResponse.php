<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use DateTime;
use CloudPDF\Core\Types\Date;

class DocDownloadLinkResponse extends JsonSerializableType
{
    /**
     * @var string $url
     */
    #[JsonProperty('url')]
    public string $url;

    /**
     * @var DateTime $expiresAt
     */
    #[JsonProperty('expiresAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $expiresAt;

    /**
     * @param array{
     *   url: string,
     *   expiresAt: DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->url = $values['url'];
        $this->expiresAt = $values['expiresAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
