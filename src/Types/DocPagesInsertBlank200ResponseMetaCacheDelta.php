<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocPagesInsertBlank200ResponseMetaCacheDelta extends JsonSerializableType
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
     * @var array<DocPagesInsertBlank200ResponseMetaCacheDeltaPagesItem> $pages
     */
    #[JsonProperty('pages'), ArrayType([DocPagesInsertBlank200ResponseMetaCacheDeltaPagesItem::class])]
    public array $pages;

    /**
     * @param array{
     *   previousDocVersion: int,
     *   docVersion: int,
     *   pages: array<DocPagesInsertBlank200ResponseMetaCacheDeltaPagesItem>,
     *   annotationsVersion?: ?int,
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
