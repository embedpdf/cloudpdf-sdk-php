<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class ChangeOpAnnotationsCreate extends JsonSerializableType
{
    /**
     * @var PageRef $page
     */
    #[JsonProperty('page')]
    public PageRef $page;

    /**
     * @var AnnotationDraft $data
     */
    #[JsonProperty('data')]
    public AnnotationDraft $data;

    /**
     * @var ?int $objectNumber
     */
    #[JsonProperty('objectNumber')]
    public ?int $objectNumber;

    /**
     * @var ?ChangeOpAnnotationsCreateResources $resources
     */
    #[JsonProperty('resources')]
    public ?ChangeOpAnnotationsCreateResources $resources;

    /**
     * @param array{
     *   page: PageRef,
     *   data: AnnotationDraft,
     *   objectNumber?: ?int,
     *   resources?: ?ChangeOpAnnotationsCreateResources,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->page = $values['page'];
        $this->data = $values['data'];
        $this->objectNumber = $values['objectNumber'] ?? null;
        $this->resources = $values['resources'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
