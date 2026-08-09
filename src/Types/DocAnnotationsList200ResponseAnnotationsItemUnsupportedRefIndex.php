<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocAnnotationsList200ResponseAnnotationsItemUnsupportedRefIndex extends JsonSerializableType
{
    /**
     * @var int $pageObjectNumber
     */
    #[JsonProperty('pageObjectNumber')]
    public int $pageObjectNumber;

    /**
     * @var int $index
     */
    #[JsonProperty('index')]
    public int $index;

    /**
     * @var DocAnnotationsList200ResponseAnnotationsItemUnsupportedRefIndexRevision $revision
     */
    #[JsonProperty('revision')]
    public DocAnnotationsList200ResponseAnnotationsItemUnsupportedRefIndexRevision $revision;

    /**
     * @param array{
     *   pageObjectNumber: int,
     *   index: int,
     *   revision: DocAnnotationsList200ResponseAnnotationsItemUnsupportedRefIndexRevision,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->pageObjectNumber = $values['pageObjectNumber'];
        $this->index = $values['index'];
        $this->revision = $values['revision'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
