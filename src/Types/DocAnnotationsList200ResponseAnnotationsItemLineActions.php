<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

class DocAnnotationsList200ResponseAnnotationsItemLineActions extends JsonSerializableType
{
    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemLineActionsActivate $activate
     */
    #[JsonProperty('activate')]
    public ?DocAnnotationsList200ResponseAnnotationsItemLineActionsActivate $activate;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemLineActionsCursorEnter $cursorEnter
     */
    #[JsonProperty('cursorEnter')]
    public ?DocAnnotationsList200ResponseAnnotationsItemLineActionsCursorEnter $cursorEnter;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemLineActionsCursorExit $cursorExit
     */
    #[JsonProperty('cursorExit')]
    public ?DocAnnotationsList200ResponseAnnotationsItemLineActionsCursorExit $cursorExit;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemLineActionsMouseDown $mouseDown
     */
    #[JsonProperty('mouseDown')]
    public ?DocAnnotationsList200ResponseAnnotationsItemLineActionsMouseDown $mouseDown;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemLineActionsMouseUp $mouseUp
     */
    #[JsonProperty('mouseUp')]
    public ?DocAnnotationsList200ResponseAnnotationsItemLineActionsMouseUp $mouseUp;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemLineActionsFocus $focus
     */
    #[JsonProperty('focus')]
    public ?DocAnnotationsList200ResponseAnnotationsItemLineActionsFocus $focus;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemLineActionsBlur $blur
     */
    #[JsonProperty('blur')]
    public ?DocAnnotationsList200ResponseAnnotationsItemLineActionsBlur $blur;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemLineActionsPageOpen $pageOpen
     */
    #[JsonProperty('pageOpen')]
    public ?DocAnnotationsList200ResponseAnnotationsItemLineActionsPageOpen $pageOpen;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemLineActionsPageClose $pageClose
     */
    #[JsonProperty('pageClose')]
    public ?DocAnnotationsList200ResponseAnnotationsItemLineActionsPageClose $pageClose;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemLineActionsPageVisible $pageVisible
     */
    #[JsonProperty('pageVisible')]
    public ?DocAnnotationsList200ResponseAnnotationsItemLineActionsPageVisible $pageVisible;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemLineActionsPageInvisible $pageInvisible
     */
    #[JsonProperty('pageInvisible')]
    public ?DocAnnotationsList200ResponseAnnotationsItemLineActionsPageInvisible $pageInvisible;

    /**
     * @param array{
     *   activate?: ?DocAnnotationsList200ResponseAnnotationsItemLineActionsActivate,
     *   cursorEnter?: ?DocAnnotationsList200ResponseAnnotationsItemLineActionsCursorEnter,
     *   cursorExit?: ?DocAnnotationsList200ResponseAnnotationsItemLineActionsCursorExit,
     *   mouseDown?: ?DocAnnotationsList200ResponseAnnotationsItemLineActionsMouseDown,
     *   mouseUp?: ?DocAnnotationsList200ResponseAnnotationsItemLineActionsMouseUp,
     *   focus?: ?DocAnnotationsList200ResponseAnnotationsItemLineActionsFocus,
     *   blur?: ?DocAnnotationsList200ResponseAnnotationsItemLineActionsBlur,
     *   pageOpen?: ?DocAnnotationsList200ResponseAnnotationsItemLineActionsPageOpen,
     *   pageClose?: ?DocAnnotationsList200ResponseAnnotationsItemLineActionsPageClose,
     *   pageVisible?: ?DocAnnotationsList200ResponseAnnotationsItemLineActionsPageVisible,
     *   pageInvisible?: ?DocAnnotationsList200ResponseAnnotationsItemLineActionsPageInvisible,
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
