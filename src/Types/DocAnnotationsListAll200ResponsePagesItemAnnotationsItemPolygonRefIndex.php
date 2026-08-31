<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonRefIndex extends JsonSerializableType
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
     * @var DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonRefIndexRevision $revision
     */
    #[JsonProperty('revision')]
    public DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonRefIndexRevision $revision;

    /**
     * @param array{
     *   pageObjectNumber: int,
     *   index: int,
     *   revision: DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonRefIndexRevision,
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
