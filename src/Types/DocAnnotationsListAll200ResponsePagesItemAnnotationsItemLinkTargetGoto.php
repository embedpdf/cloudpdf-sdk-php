<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGoto extends JsonSerializableType
{
    /**
     * @var DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestination $destination
     */
    #[JsonProperty('destination')]
    public DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestination $destination;

    /**
     * @param array{
     *   destination: DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestination,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->destination = $values['destination'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
