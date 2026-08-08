<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

class DocAnnotationsList200ResponseAnnotationsItemLinkTargetGoto extends JsonSerializableType
{
    /**
     * @var DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestination $destination
     */
    #[JsonProperty('destination')]
    public DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestination $destination;

    /**
     * @param array{
     *   destination: DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestination,
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
