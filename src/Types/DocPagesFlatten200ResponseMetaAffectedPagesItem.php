<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

class DocPagesFlatten200ResponseMetaAffectedPagesItem extends JsonSerializableType
{
    /**
     * @var int $pageObjectNumber
     */
    #[JsonProperty('pageObjectNumber')]
    public int $pageObjectNumber;

    /**
     * @var DocPagesFlatten200ResponseMetaAffectedPagesItemRevision $revision
     */
    #[JsonProperty('revision')]
    public DocPagesFlatten200ResponseMetaAffectedPagesItemRevision $revision;

    /**
     * @var DocPagesFlatten200ResponseMetaAffectedPagesItemWeakAnnotationState $weakAnnotationState
     */
    #[JsonProperty('weakAnnotationState')]
    public DocPagesFlatten200ResponseMetaAffectedPagesItemWeakAnnotationState $weakAnnotationState;

    /**
     * @param array{
     *   pageObjectNumber: int,
     *   revision: DocPagesFlatten200ResponseMetaAffectedPagesItemRevision,
     *   weakAnnotationState: DocPagesFlatten200ResponseMetaAffectedPagesItemWeakAnnotationState,
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
