<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquigglyQuadPointsItem extends JsonSerializableType
{
    /**
     * @var DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquigglyQuadPointsItemP1 $p1
     */
    #[JsonProperty('p1')]
    public DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquigglyQuadPointsItemP1 $p1;

    /**
     * @var DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquigglyQuadPointsItemP2 $p2
     */
    #[JsonProperty('p2')]
    public DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquigglyQuadPointsItemP2 $p2;

    /**
     * @var DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquigglyQuadPointsItemP3 $p3
     */
    #[JsonProperty('p3')]
    public DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquigglyQuadPointsItemP3 $p3;

    /**
     * @var DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquigglyQuadPointsItemP4 $p4
     */
    #[JsonProperty('p4')]
    public DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquigglyQuadPointsItemP4 $p4;

    /**
     * @param array{
     *   p1: DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquigglyQuadPointsItemP1,
     *   p2: DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquigglyQuadPointsItemP2,
     *   p3: DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquigglyQuadPointsItemP3,
     *   p4: DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquigglyQuadPointsItemP4,
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
