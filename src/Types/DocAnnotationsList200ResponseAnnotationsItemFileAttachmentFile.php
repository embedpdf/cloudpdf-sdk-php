<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocAnnotationsList200ResponseAnnotationsItemFileAttachmentFile extends JsonSerializableType
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
     * @var ?string $creationDate
     */
    #[JsonProperty('creationDate')]
    public ?string $creationDate;

    /**
     * @param array{
     *   name: string,
     *   mimeType?: ?string,
     *   description?: ?string,
     *   size?: ?int,
     *   checksum?: ?string,
     *   creationDate?: ?string,
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
        $this->creationDate = $values['creationDate'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
