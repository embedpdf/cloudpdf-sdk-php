<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class FontProgramInfo extends JsonSerializableType
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
     * @var value-of<FontProgramInfoEmbedded> $embedded
     */
    #[JsonProperty('embedded')]
    public string $embedded;

    /**
     * @var ?value-of<FontProgramInfoFormat> $format
     */
    #[JsonProperty('format')]
    public ?string $format;

    /**
     * @var ?value-of<FontProgramInfoEmbeddingPermission> $embeddingPermission
     */
    #[JsonProperty('embeddingPermission')]
    public ?string $embeddingPermission;

    /**
     * @var bool $canDownload
     */
    #[JsonProperty('canDownload')]
    public bool $canDownload;

    /**
     * @var array<FontProgramInfoCoversItem> $covers
     */
    #[JsonProperty('covers'), ArrayType([FontProgramInfoCoversItem::class])]
    public array $covers;

    /**
     * @var float $ascent
     */
    #[JsonProperty('ascent')]
    public float $ascent;

    /**
     * @var float $descent
     */
    #[JsonProperty('descent')]
    public float $descent;

    /**
     * @param array{
     *   embedded: value-of<FontProgramInfoEmbedded>,
     *   canDownload: bool,
     *   covers: array<FontProgramInfoCoversItem>,
     *   ascent: float,
     *   descent: float,
     *   displayHash?: ?string,
     *   sourceHash?: ?string,
     *   format?: ?value-of<FontProgramInfoFormat>,
     *   embeddingPermission?: ?value-of<FontProgramInfoEmbeddingPermission>,
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
        $this->covers = $values['covers'];
        $this->ascent = $values['ascent'];
        $this->descent = $values['descent'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
