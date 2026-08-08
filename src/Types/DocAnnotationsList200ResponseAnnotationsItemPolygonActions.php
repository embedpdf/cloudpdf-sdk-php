<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

class DocAnnotationsList200ResponseAnnotationsItemPolygonActions extends JsonSerializableType
{
    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemPolygonActionsActivate $activate
     */
    #[JsonProperty('activate')]
    public ?DocAnnotationsList200ResponseAnnotationsItemPolygonActionsActivate $activate;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemPolygonActionsCursorEnter $cursorEnter
     */
    #[JsonProperty('cursorEnter')]
    public ?DocAnnotationsList200ResponseAnnotationsItemPolygonActionsCursorEnter $cursorEnter;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemPolygonActionsCursorExit $cursorExit
     */
    #[JsonProperty('cursorExit')]
    public ?DocAnnotationsList200ResponseAnnotationsItemPolygonActionsCursorExit $cursorExit;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemPolygonActionsMouseDown $mouseDown
     */
    #[JsonProperty('mouseDown')]
    public ?DocAnnotationsList200ResponseAnnotationsItemPolygonActionsMouseDown $mouseDown;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemPolygonActionsMouseUp $mouseUp
     */
    #[JsonProperty('mouseUp')]
    public ?DocAnnotationsList200ResponseAnnotationsItemPolygonActionsMouseUp $mouseUp;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemPolygonActionsFocus $focus
     */
    #[JsonProperty('focus')]
    public ?DocAnnotationsList200ResponseAnnotationsItemPolygonActionsFocus $focus;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemPolygonActionsBlur $blur
     */
    #[JsonProperty('blur')]
    public ?DocAnnotationsList200ResponseAnnotationsItemPolygonActionsBlur $blur;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemPolygonActionsPageOpen $pageOpen
     */
    #[JsonProperty('pageOpen')]
    public ?DocAnnotationsList200ResponseAnnotationsItemPolygonActionsPageOpen $pageOpen;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemPolygonActionsPageClose $pageClose
     */
    #[JsonProperty('pageClose')]
    public ?DocAnnotationsList200ResponseAnnotationsItemPolygonActionsPageClose $pageClose;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemPolygonActionsPageVisible $pageVisible
     */
    #[JsonProperty('pageVisible')]
    public ?DocAnnotationsList200ResponseAnnotationsItemPolygonActionsPageVisible $pageVisible;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemPolygonActionsPageInvisible $pageInvisible
     */
    #[JsonProperty('pageInvisible')]
    public ?DocAnnotationsList200ResponseAnnotationsItemPolygonActionsPageInvisible $pageInvisible;

    /**
     * @param array{
     *   activate?: ?DocAnnotationsList200ResponseAnnotationsItemPolygonActionsActivate,
     *   cursorEnter?: ?DocAnnotationsList200ResponseAnnotationsItemPolygonActionsCursorEnter,
     *   cursorExit?: ?DocAnnotationsList200ResponseAnnotationsItemPolygonActionsCursorExit,
     *   mouseDown?: ?DocAnnotationsList200ResponseAnnotationsItemPolygonActionsMouseDown,
     *   mouseUp?: ?DocAnnotationsList200ResponseAnnotationsItemPolygonActionsMouseUp,
     *   focus?: ?DocAnnotationsList200ResponseAnnotationsItemPolygonActionsFocus,
     *   blur?: ?DocAnnotationsList200ResponseAnnotationsItemPolygonActionsBlur,
     *   pageOpen?: ?DocAnnotationsList200ResponseAnnotationsItemPolygonActionsPageOpen,
     *   pageClose?: ?DocAnnotationsList200ResponseAnnotationsItemPolygonActionsPageClose,
     *   pageVisible?: ?DocAnnotationsList200ResponseAnnotationsItemPolygonActionsPageVisible,
     *   pageInvisible?: ?DocAnnotationsList200ResponseAnnotationsItemPolygonActionsPageInvisible,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->activate = $values['activate'] ?? null;
        $this->cursorEnter = $values['cursorEnter'] ?? null;
        $this->cursorExit = $values['cursorExit'] ?? null;
        $this->mouseDown = $values['mouseDown'] ?? null;
        $this->mouseUp = $values['mouseUp'] ?? null;
        $this->focus = $values['focus'] ?? null;
        $this->blur = $values['blur'] ?? null;
        $this->pageOpen = $values['pageOpen'] ?? null;
        $this->pageClose = $values['pageClose'] ?? null;
        $this->pageVisible = $values['pageVisible'] ?? null;
        $this->pageInvisible = $values['pageInvisible'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
