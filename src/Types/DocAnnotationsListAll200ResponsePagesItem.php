<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocAnnotationsListAll200ResponsePagesItem extends JsonSerializableType
{
    /**
     * @var DocAnnotationsListAll200ResponsePagesItemPageState $pageState
     */
    #[JsonProperty('pageState')]
    public DocAnnotationsListAll200ResponsePagesItemPageState $pageState;

    /**
     * @var array<DocAnnotationsListAll200ResponsePagesItemAnnotationsItem> $annotations
     */
    #[JsonProperty('annotations'), ArrayType([DocAnnotationsListAll200ResponsePagesItemAnnotationsItem::class])]
    public array $annotations;

    /**
     * @param array{
     *   pageState: DocAnnotationsListAll200ResponsePagesItemPageState,
     *   annotations: array<DocAnnotationsListAll200ResponsePagesItemAnnotationsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->pageState = $values['pageState'];
        $this->annotations = $values['annotations'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
