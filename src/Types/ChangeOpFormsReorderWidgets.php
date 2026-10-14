<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;
use CloudPDF\Core\Types\Union;

class ChangeOpFormsReorderWidgets extends JsonSerializableType
{
    /**
     * @var PageRef $page
     */
    #[JsonProperty('page')]
    public PageRef $page;

    /**
     * @var array<AnnotationRef> $widgets
     */
    #[JsonProperty('widgets'), ArrayType([AnnotationRef::class])]
    public array $widgets;

    /**
     * @var (
     *    value-of<AnnotationPositionZero>
     *   |AnnotationPositionAfter
     * ) $position
     */
    #[JsonProperty('position'), Union('string', AnnotationPositionAfter::class)]
    public string|AnnotationPositionAfter $position;

    /**
     * @param array{
     *   page: PageRef,
     *   widgets: array<AnnotationRef>,
     *   position: (
     *    value-of<AnnotationPositionZero>
     *   |AnnotationPositionAfter
     * ),
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->page = $values['page'];
        $this->widgets = $values['widgets'];
        $this->position = $values['position'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
