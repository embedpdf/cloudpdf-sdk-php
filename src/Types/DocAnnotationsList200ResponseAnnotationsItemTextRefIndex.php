<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

class DocAnnotationsList200ResponseAnnotationsItemTextRefIndex extends JsonSerializableType
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
     * @var DocAnnotationsList200ResponseAnnotationsItemTextRefIndexRevision $revision
     */
    #[JsonProperty('revision')]
    public DocAnnotationsList200ResponseAnnotationsItemTextRefIndexRevision $revision;

    /**
     * @param array{
     *   pageObjectNumber: int,
     *   index: int,
     *   revision: DocAnnotationsList200ResponseAnnotationsItemTextRefIndexRevision,
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
