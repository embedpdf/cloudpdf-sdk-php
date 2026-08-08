<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;
use Cloudpdf\Core\Types\ArrayType;

class DocAnnotationsList200Response extends JsonSerializableType
{
    /**
     * @var DocAnnotationsList200ResponsePageState $pageState
     */
    #[JsonProperty('pageState')]
    public DocAnnotationsList200ResponsePageState $pageState;

    /**
     * @var array<DocAnnotationsList200ResponseAnnotationsItem> $annotations
     */
    #[JsonProperty('annotations'), ArrayType([DocAnnotationsList200ResponseAnnotationsItem::class])]
    public array $annotations;

    /**
     * @param array{
     *   pageState: DocAnnotationsList200ResponsePageState,
     *   annotations: array<DocAnnotationsList200ResponseAnnotationsItem>,
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
