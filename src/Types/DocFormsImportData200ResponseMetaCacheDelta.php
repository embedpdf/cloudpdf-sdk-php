<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocFormsImportData200ResponseMetaCacheDelta extends JsonSerializableType
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
     * @var array<DocFormsImportData200ResponseMetaCacheDeltaPagesItem> $pages
     */
    #[JsonProperty('pages'), ArrayType([DocFormsImportData200ResponseMetaCacheDeltaPagesItem::class])]
    public array $pages;

    /**
     * @param array{
     *   previousDocVersion: int,
     *   docVersion: int,
     *   pages: array<DocFormsImportData200ResponseMetaCacheDeltaPagesItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->previousDocVersion = $values['previousDocVersion'];
        $this->docVersion = $values['docVersion'];
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
