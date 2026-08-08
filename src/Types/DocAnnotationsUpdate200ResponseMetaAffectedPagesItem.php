<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

class DocAnnotationsUpdate200ResponseMetaAffectedPagesItem extends JsonSerializableType
{
    /**
     * @var int $pageObjectNumber
     */
    #[JsonProperty('pageObjectNumber')]
    public int $pageObjectNumber;

    /**
     * @var DocAnnotationsUpdate200ResponseMetaAffectedPagesItemRevision $revision
     */
    #[JsonProperty('revision')]
    public DocAnnotationsUpdate200ResponseMetaAffectedPagesItemRevision $revision;

    /**
     * @var DocAnnotationsUpdate200ResponseMetaAffectedPagesItemWeakAnnotationState $weakAnnotationState
     */
    #[JsonProperty('weakAnnotationState')]
    public DocAnnotationsUpdate200ResponseMetaAffectedPagesItemWeakAnnotationState $weakAnnotationState;

    /**
     * @param array{
     *   pageObjectNumber: int,
     *   revision: DocAnnotationsUpdate200ResponseMetaAffectedPagesItemRevision,
     *   weakAnnotationState: DocAnnotationsUpdate200ResponseMetaAffectedPagesItemWeakAnnotationState,
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
