<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

class DocAnnotationsList200ResponseAnnotationsItemPolylineLineEndings extends JsonSerializableType
{
    /**
     * @var value-of<DocAnnotationsList200ResponseAnnotationsItemPolylineLineEndingsStart> $start
     */
    #[JsonProperty('start')]
    public string $start;

    /**
     * @var value-of<DocAnnotationsList200ResponseAnnotationsItemPolylineLineEndingsEnd> $end
     */
    #[JsonProperty('end')]
    public string $end;

    /**
     * @param array{
     *   start: value-of<DocAnnotationsList200ResponseAnnotationsItemPolylineLineEndingsStart>,
     *   end: value-of<DocAnnotationsList200ResponseAnnotationsItemPolylineLineEndingsEnd>,
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
