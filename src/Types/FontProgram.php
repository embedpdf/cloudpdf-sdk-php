<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class FontProgram extends JsonSerializableType
{
    /**
     * @var ?string $displayHash
     */
    #[JsonProperty('displayHash')]
    public ?string $displayHash;

    /**
     * @var ?string $sourceHash
     */
    #[JsonProperty('sourceHash')]
    public ?string $sourceHash;

    /**
     * @var value-of<FontProgramEmbedded> $embedded
     */
    #[JsonProperty('embedded')]
    public string $embedded;

    /**
     * @var ?value-of<FontProgramFormat> $format
     */
    #[JsonProperty('format')]
    public ?string $format;

    /**
     * @var ?value-of<FontProgramEmbeddingPermission> $embeddingPermission
     */
    #[JsonProperty('embeddingPermission')]
    public ?string $embeddingPermission;

    /**
     * @var bool $canDownload
     */
    #[JsonProperty('canDownload')]
    public bool $canDownload;

    /**
     * @param array{
     *   embedded: value-of<FontProgramEmbedded>,
     *   canDownload: bool,
     *   displayHash?: ?string,
     *   sourceHash?: ?string,
     *   format?: ?value-of<FontProgramFormat>,
     *   embeddingPermission?: ?value-of<FontProgramEmbeddingPermission>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->displayHash = $values['displayHash'] ?? null;
        $this->sourceHash = $values['sourceHash'] ?? null;
        $this->embedded = $values['embedded'];
        $this->format = $values['format'] ?? null;
        $this->embeddingPermission = $values['embeddingPermission'] ?? null;
        $this->canDownload = $values['canDownload'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
