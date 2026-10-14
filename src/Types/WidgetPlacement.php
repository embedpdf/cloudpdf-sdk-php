<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class WidgetPlacement extends JsonSerializableType
{
    /**
     * @var PageRef $page
     */
    #[JsonProperty('page')]
    public PageRef $page;

    /**
     * @var ?WidgetPlacementRect $rect
     */
    #[JsonProperty('rect')]
    public ?WidgetPlacementRect $rect;

    /**
     * @var ?WidgetPlacementBox $box
     */
    #[JsonProperty('box')]
    public ?WidgetPlacementBox $box;

    /**
     * @var ?float $rotation
     */
    #[JsonProperty('rotation')]
    public ?float $rotation;

    /**
     * @var ?string $exportValue
     */
    #[JsonProperty('exportValue')]
    public ?string $exportValue;

    /**
     * @var ?WidgetActionsPatch $actions
     */
    #[JsonProperty('actions')]
    public ?WidgetActionsPatch $actions;

    /**
     * @var ?string $color
     */
    #[JsonProperty('color')]
    public ?string $color;

    /**
     * @var ?string $interiorColor
     */
    #[JsonProperty('interiorColor')]
    public ?string $interiorColor;

    /**
     * @var ?float $strokeWidth
     */
    #[JsonProperty('strokeWidth')]
    public ?float $strokeWidth;

    /**
     * @var ?value-of<WidgetPlacementBorderStyle> $borderStyle
     */
    #[JsonProperty('borderStyle')]
    public ?string $borderStyle;

    /**
     * @var ?array<float> $dashArray
     */
    #[JsonProperty('dashArray'), ArrayType(['float'])]
    public ?array $dashArray;

    /**
     * @var ?string $fontFamily
     */
    #[JsonProperty('fontFamily')]
    public ?string $fontFamily;

    /**
     * @var ?float $fontSize
     */
    #[JsonProperty('fontSize')]
    public ?float $fontSize;

    /**
     * @var ?string $fontColor
     */
    #[JsonProperty('fontColor')]
    public ?string $fontColor;

    /**
     * @var ?value-of<WidgetPlacementTextAlign> $textAlign
     */
    #[JsonProperty('textAlign')]
    public ?string $textAlign;

    /**
     * @var ?string $caption
     */
    #[JsonProperty('caption')]
    public ?string $caption;

    /**
     * @var ?value-of<WidgetPlacementCheckStyle> $checkStyle
     */
    #[JsonProperty('checkStyle')]
    public ?string $checkStyle;

    /**
     * @param array{
     *   page: PageRef,
     *   rect?: ?WidgetPlacementRect,
     *   box?: ?WidgetPlacementBox,
     *   rotation?: ?float,
     *   exportValue?: ?string,
     *   actions?: ?WidgetActionsPatch,
     *   color?: ?string,
     *   interiorColor?: ?string,
     *   strokeWidth?: ?float,
     *   borderStyle?: ?value-of<WidgetPlacementBorderStyle>,
     *   dashArray?: ?array<float>,
     *   fontFamily?: ?string,
     *   fontSize?: ?float,
     *   fontColor?: ?string,
     *   textAlign?: ?value-of<WidgetPlacementTextAlign>,
     *   caption?: ?string,
     *   checkStyle?: ?value-of<WidgetPlacementCheckStyle>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->page = $values['page'];
        $this->rect = $values['rect'] ?? null;
        $this->box = $values['box'] ?? null;
        $this->rotation = $values['rotation'] ?? null;
        $this->exportValue = $values['exportValue'] ?? null;
        $this->actions = $values['actions'] ?? null;
        $this->color = $values['color'] ?? null;
        $this->interiorColor = $values['interiorColor'] ?? null;
        $this->strokeWidth = $values['strokeWidth'] ?? null;
        $this->borderStyle = $values['borderStyle'] ?? null;
        $this->dashArray = $values['dashArray'] ?? null;
        $this->fontFamily = $values['fontFamily'] ?? null;
        $this->fontSize = $values['fontSize'] ?? null;
        $this->fontColor = $values['fontColor'] ?? null;
        $this->textAlign = $values['textAlign'] ?? null;
        $this->caption = $values['caption'] ?? null;
        $this->checkStyle = $values['checkStyle'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
