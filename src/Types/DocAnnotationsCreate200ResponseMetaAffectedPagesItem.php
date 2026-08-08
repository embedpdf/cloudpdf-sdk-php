<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

class DocAnnotationsCreate200ResponseMetaAffectedPagesItem extends JsonSerializableType
{
    /**
     * @var int $pageObjectNumber
     */
    #[JsonProperty('pageObjectNumber')]
    public int $pageObjectNumber;

    /**
     * @var DocAnnotationsCreate200ResponseMetaAffectedPagesItemRevision $revision
     */
    #[JsonProperty('revision')]
    public DocAnnotationsCreate200ResponseMetaAffectedPagesItemRevision $revision;

    /**
     * @var DocAnnotationsCreate200ResponseMetaAffectedPagesItemWeakAnnotationState $weakAnnotationState
     */
    #[JsonProperty('weakAnnotationState')]
    public DocAnnotationsCreate200ResponseMetaAffectedPagesItemWeakAnnotationState $weakAnnotationState;

    /**
     * @param array{
     *   pageObjectNumber: int,
     *   revision: DocAnnotationsCreate200ResponseMetaAffectedPagesItemRevision,
     *   weakAnnotationState: DocAnnotationsCreate200ResponseMetaAffectedPagesItemWeakAnnotationState,
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
