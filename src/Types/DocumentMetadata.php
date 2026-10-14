<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use DateTime;
use CloudPDF\Core\Types\Date;

class DocumentMetadata extends JsonSerializableType
{
    /**
     * @var ?string $title
     */
    #[JsonProperty('title')]
    public ?string $title;

    /**
     * @var ?string $author
     */
    #[JsonProperty('author')]
    public ?string $author;

    /**
     * @var ?string $subject
     */
    #[JsonProperty('subject')]
    public ?string $subject;

    /**
     * @var ?string $keywords
     */
    #[JsonProperty('keywords')]
    public ?string $keywords;

    /**
     * @var ?string $producer
     */
    #[JsonProperty('producer')]
    public ?string $producer;

    /**
     * @var ?string $creator
     */
    #[JsonProperty('creator')]
    public ?string $creator;

    /**
     * @var ?DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $createdAt;

    /**
     * @var ?DateTime $modifiedAt
     */
    #[JsonProperty('modifiedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $modifiedAt;

    /**
     * @var value-of<DocumentMetadataTrapped> $trapped
     */
    #[JsonProperty('trapped')]
    public string $trapped;

    /**
     * @param array{
     *   trapped: value-of<DocumentMetadataTrapped>,
     *   title?: ?string,
     *   author?: ?string,
     *   subject?: ?string,
     *   keywords?: ?string,
     *   producer?: ?string,
     *   creator?: ?string,
     *   createdAt?: ?DateTime,
     *   modifiedAt?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->title = $values['title'] ?? null;
        $this->author = $values['author'] ?? null;
        $this->subject = $values['subject'] ?? null;
        $this->keywords = $values['keywords'] ?? null;
        $this->producer = $values['producer'] ?? null;
        $this->creator = $values['creator'] ?? null;
        $this->createdAt = $values['createdAt'] ?? null;
        $this->modifiedAt = $values['modifiedAt'] ?? null;
        $this->trapped = $values['trapped'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
