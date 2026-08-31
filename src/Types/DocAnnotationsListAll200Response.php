<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocAnnotationsListAll200Response extends JsonSerializableType
{
    /**
     * @var array<DocAnnotationsListAll200ResponsePagesItem> $pages
     */
    #[JsonProperty('pages'), ArrayType([DocAnnotationsListAll200ResponsePagesItem::class])]
    public array $pages;

    /**
     * @var ?int $auditHead
     */
    #[JsonProperty('auditHead')]
    public ?int $auditHead;

    /**
     * @param array{
     *   pages: array<DocAnnotationsListAll200ResponsePagesItem>,
     *   auditHead?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->pages = $values['pages'];
        $this->auditHead = $values['auditHead'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
