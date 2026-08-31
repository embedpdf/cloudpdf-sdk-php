<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineLinePoints extends JsonSerializableType
{
    /**
     * @var DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineLinePointsStart $start
     */
    #[JsonProperty('start')]
    public DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineLinePointsStart $start;

    /**
     * @var DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineLinePointsEnd $end
     */
    #[JsonProperty('end')]
    public DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineLinePointsEnd $end;

    /**
     * @param array{
     *   start: DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineLinePointsStart,
     *   end: DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineLinePointsEnd,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->start = $values['start'];
        $this->end = $values['end'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
