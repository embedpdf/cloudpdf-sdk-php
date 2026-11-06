<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class FontProgram extends JsonSerializableType
{
    /**
     * @var ?string $displaySha256
     */
    #[JsonProperty('displaySha256')]
    public ?string $displaySha256;

    /**
     * @var ?string $sourceSha256
     */
    #[JsonProperty('sourceSha256')]
    public ?string $sourceSha256;

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
     *   displaySha256?: ?string,
     *   sourceSha256?: ?string,
     *   format?: ?value-of<FontProgramFormat>,
     *   embeddingPermission?: ?value-of<FontProgramEmbeddingPermission>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->displaySha256 = $values['displaySha256'] ?? null;
        $this->sourceSha256 = $values['sourceSha256'] ?? null;
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
