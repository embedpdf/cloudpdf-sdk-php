<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

class DocAnnotationsDelete200ResponseMetaAffectedPagesItem extends JsonSerializableType
{
    /**
     * @var int $pageObjectNumber
     */
    #[JsonProperty('pageObjectNumber')]
    public int $pageObjectNumber;

    /**
     * @var DocAnnotationsDelete200ResponseMetaAffectedPagesItemRevision $revision
     */
    #[JsonProperty('revision')]
    public DocAnnotationsDelete200ResponseMetaAffectedPagesItemRevision $revision;

    /**
     * @var DocAnnotationsDelete200ResponseMetaAffectedPagesItemWeakAnnotationState $weakAnnotationState
     */
    #[JsonProperty('weakAnnotationState')]
    public DocAnnotationsDelete200ResponseMetaAffectedPagesItemWeakAnnotationState $weakAnnotationState;

    /**
     * @param array{
     *   pageObjectNumber: int,
     *   revision: DocAnnotationsDelete200ResponseMetaAffectedPagesItemRevision,
     *   weakAnnotationState: DocAnnotationsDelete200ResponseMetaAffectedPagesItemWeakAnnotationState,
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
