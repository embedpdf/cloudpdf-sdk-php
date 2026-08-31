<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineLineEndings extends JsonSerializableType
{
    /**
     * @var value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineLineEndingsStart> $start
     */
    #[JsonProperty('start')]
    public string $start;

    /**
     * @var value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineLineEndingsEnd> $end
     */
    #[JsonProperty('end')]
    public string $end;

    /**
     * @param array{
     *   start: value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineLineEndingsStart>,
     *   end: value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineLineEndingsEnd>,
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
