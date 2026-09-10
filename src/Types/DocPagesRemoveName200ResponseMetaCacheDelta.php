<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocPagesRemoveName200ResponseMetaCacheDelta extends JsonSerializableType
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
     * @var array<DocPagesRemoveName200ResponseMetaCacheDeltaPagesItem> $pages
     */
    #[JsonProperty('pages'), ArrayType([DocPagesRemoveName200ResponseMetaCacheDeltaPagesItem::class])]
    public array $pages;

    /**
     * @param array{
     *   previousDocVersion: int,
     *   docVersion: int,
     *   pages: array<DocPagesRemoveName200ResponseMetaCacheDeltaPagesItem>,
     *   annotationsVersion?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->previousDocVersion = $values['previousDocVersion'];
        $this->docVersion = $values['docVersion'];
        $this->annotationsVersion = $values['annotationsVersion'] ?? null;
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
