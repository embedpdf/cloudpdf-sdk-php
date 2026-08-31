<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocAnnotationsListAll200ResponsePagesItemPageState extends JsonSerializableType
{
    /**
     * @var int $pageObjectNumber
     */
    #[JsonProperty('pageObjectNumber')]
    public int $pageObjectNumber;

    /**
     * @var DocAnnotationsListAll200ResponsePagesItemPageStateRevision $revision
     */
    #[JsonProperty('revision')]
    public DocAnnotationsListAll200ResponsePagesItemPageStateRevision $revision;

    /**
     * @var DocAnnotationsListAll200ResponsePagesItemPageStateWeakAnnotationState $weakAnnotationState
     */
    #[JsonProperty('weakAnnotationState')]
    public DocAnnotationsListAll200ResponsePagesItemPageStateWeakAnnotationState $weakAnnotationState;

    /**
     * @param array{
     *   pageObjectNumber: int,
     *   revision: DocAnnotationsListAll200ResponsePagesItemPageStateRevision,
     *   weakAnnotationState: DocAnnotationsListAll200ResponsePagesItemPageStateWeakAnnotationState,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->pageObjectNumber = $values['pageObjectNumber'];
        $this->revision = $values['revision'];
        $this->weakAnnotationState = $values['weakAnnotationState'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
