<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use DateTime;
use CloudPDF\Core\Types\Date;

class AttachmentFileInfo extends JsonSerializableType
{
    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $mimeType
     */
    #[JsonProperty('mimeType')]
    public ?string $mimeType;

    /**
     * @var ?string $description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?int $size
     */
    #[JsonProperty('size')]
    public ?int $size;

    /**
     * @var ?string $checksum
     */
    #[JsonProperty('checksum')]
    public ?string $checksum;

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
     * @param array{
     *   name: string,
     *   mimeType?: ?string,
     *   description?: ?string,
     *   size?: ?int,
     *   checksum?: ?string,
     *   createdAt?: ?DateTime,
     *   modifiedAt?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->mimeType = $values['mimeType'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->size = $values['size'] ?? null;
        $this->checksum = $values['checksum'] ?? null;
        $this->createdAt = $values['createdAt'] ?? null;
        $this->modifiedAt = $values['modifiedAt'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
