<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

class DocAnnotationsList200ResponseAnnotationsItemSquigglyQuadPointsItem extends JsonSerializableType
{
    /**
     * @var DocAnnotationsList200ResponseAnnotationsItemSquigglyQuadPointsItemP1 $p1
     */
    #[JsonProperty('p1')]
    public DocAnnotationsList200ResponseAnnotationsItemSquigglyQuadPointsItemP1 $p1;

    /**
     * @var DocAnnotationsList200ResponseAnnotationsItemSquigglyQuadPointsItemP2 $p2
     */
    #[JsonProperty('p2')]
    public DocAnnotationsList200ResponseAnnotationsItemSquigglyQuadPointsItemP2 $p2;

    /**
     * @var DocAnnotationsList200ResponseAnnotationsItemSquigglyQuadPointsItemP3 $p3
     */
    #[JsonProperty('p3')]
    public DocAnnotationsList200ResponseAnnotationsItemSquigglyQuadPointsItemP3 $p3;

    /**
     * @var DocAnnotationsList200ResponseAnnotationsItemSquigglyQuadPointsItemP4 $p4
     */
    #[JsonProperty('p4')]
    public DocAnnotationsList200ResponseAnnotationsItemSquigglyQuadPointsItemP4 $p4;

    /**
     * @param array{
     *   p1: DocAnnotationsList200ResponseAnnotationsItemSquigglyQuadPointsItemP1,
     *   p2: DocAnnotationsList200ResponseAnnotationsItemSquigglyQuadPointsItemP2,
     *   p3: DocAnnotationsList200ResponseAnnotationsItemSquigglyQuadPointsItemP3,
     *   p4: DocAnnotationsList200ResponseAnnotationsItemSquigglyQuadPointsItemP4,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->p1 = $values['p1'];
        $this->p2 = $values['p2'];
        $this->p3 = $values['p3'];
        $this->p4 = $values['p4'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
