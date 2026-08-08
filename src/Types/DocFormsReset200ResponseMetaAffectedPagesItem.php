<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

class DocFormsReset200ResponseMetaAffectedPagesItem extends JsonSerializableType
{
    /**
     * @var int $pageObjectNumber
     */
    #[JsonProperty('pageObjectNumber')]
    public int $pageObjectNumber;

    /**
     * @var DocFormsReset200ResponseMetaAffectedPagesItemRevision $revision
     */
    #[JsonProperty('revision')]
    public DocFormsReset200ResponseMetaAffectedPagesItemRevision $revision;

    /**
     * @var DocFormsReset200ResponseMetaAffectedPagesItemWeakAnnotationState $weakAnnotationState
     */
    #[JsonProperty('weakAnnotationState')]
    public DocFormsReset200ResponseMetaAffectedPagesItemWeakAnnotationState $weakAnnotationState;

    /**
     * @param array{
     *   pageObjectNumber: int,
     *   revision: DocFormsReset200ResponseMetaAffectedPagesItemRevision,
     *   weakAnnotationState: DocFormsReset200ResponseMetaAffectedPagesItemWeakAnnotationState,
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
