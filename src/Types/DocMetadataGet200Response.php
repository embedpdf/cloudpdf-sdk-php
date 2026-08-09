<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use DateTime;
use CloudPDF\Core\Types\Date;
use CloudPDF\Core\Types\ArrayType;

class DocMetadataGet200Response extends JsonSerializableType
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
     * @var ?DateTime $created
     */
    #[JsonProperty('created'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $created;

    /**
     * @var ?DateTime $modified
     */
    #[JsonProperty('modified'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $modified;

    /**
     * @var value-of<DocMetadataGet200ResponseTrapped> $trapped
     */
    #[JsonProperty('trapped')]
    public string $trapped;

    /**
     * @var array<string, string> $custom
     */
    #[JsonProperty('custom'), ArrayType(['string' => 'string'])]
    public array $custom;

    /**
     * @param array{
     *   trapped: value-of<DocMetadataGet200ResponseTrapped>,
     *   custom: array<string, string>,
     *   title?: ?string,
     *   author?: ?string,
     *   subject?: ?string,
     *   keywords?: ?string,
     *   producer?: ?string,
     *   creator?: ?string,
     *   created?: ?DateTime,
     *   modified?: ?DateTime,
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
        $this->created = $values['created'] ?? null;
        $this->modified = $values['modified'] ?? null;
        $this->trapped = $values['trapped'];
        $this->custom = $values['custom'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
