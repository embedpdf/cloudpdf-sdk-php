<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class CacheDelta extends JsonSerializableType
{
    /**
     * @var int $previousDocVersion
     */
    #[JsonProperty('previousDocVersion')]
    public int $previousDocVersion;

    /**
     * @var int $docVersion
     */
    #[JsonProperty('docVersion')]
    public int $docVersion;

    /**
     * @var ?int $annotationsVersion
     */
    #[JsonProperty('annotationsVersion')]
    public ?int $annotationsVersion;

    /**
     * @var ?int $formsVersion
     */
    #[JsonProperty('formsVersion')]
    public ?int $formsVersion;

    /**
     * @var ?int $layoutVersion
     */
    #[JsonProperty('layoutVersion')]
    public ?int $layoutVersion;

    /**
     * @var ?int $metadataVersion
     */
    #[JsonProperty('metadataVersion')]
    public ?int $metadataVersion;

    /**
     * @var ?int $attachmentsVersion
     */
    #[JsonProperty('attachmentsVersion')]
    public ?int $attachmentsVersion;

    /**
     * @var ?int $outlineVersion
     */
    #[JsonProperty('outlineVersion')]
    public ?int $outlineVersion;

    /**
     * @var ?int $layerVersion
     */
    #[JsonProperty('layerVersion')]
    public ?int $layerVersion;

    /**
     * @var ?bool $working
     */
    #[JsonProperty('working')]
    public ?bool $working;

    /**
     * @var array<CacheDeltaPagesItem> $pages
     */
    #[JsonProperty('pages'), ArrayType([CacheDeltaPagesItem::class])]
    public array $pages;

    /**
     * @param array{
     *   previousDocVersion: int,
     *   docVersion: int,
     *   pages: array<CacheDeltaPagesItem>,
     *   annotationsVersion?: ?int,
     *   formsVersion?: ?int,
     *   layoutVersion?: ?int,
     *   metadataVersion?: ?int,
     *   attachmentsVersion?: ?int,
     *   outlineVersion?: ?int,
     *   layerVersion?: ?int,
     *   working?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->previousDocVersion = $values['previousDocVersion'];
        $this->docVersion = $values['docVersion'];
        $this->annotationsVersion = $values['annotationsVersion'] ?? null;
        $this->formsVersion = $values['formsVersion'] ?? null;
        $this->layoutVersion = $values['layoutVersion'] ?? null;
        $this->metadataVersion = $values['metadataVersion'] ?? null;
        $this->attachmentsVersion = $values['attachmentsVersion'] ?? null;
        $this->outlineVersion = $values['outlineVersion'] ?? null;
        $this->layerVersion = $values['layerVersion'] ?? null;
        $this->working = $values['working'] ?? null;
        $this->pages = $values['pages'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
