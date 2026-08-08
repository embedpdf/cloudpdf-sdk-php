<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

class DocAnnotationsList200ResponseAnnotationsItemUnderlineActions extends JsonSerializableType
{
    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemUnderlineActionsActivate $activate
     */
    #[JsonProperty('activate')]
    public ?DocAnnotationsList200ResponseAnnotationsItemUnderlineActionsActivate $activate;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemUnderlineActionsCursorEnter $cursorEnter
     */
    #[JsonProperty('cursorEnter')]
    public ?DocAnnotationsList200ResponseAnnotationsItemUnderlineActionsCursorEnter $cursorEnter;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemUnderlineActionsCursorExit $cursorExit
     */
    #[JsonProperty('cursorExit')]
    public ?DocAnnotationsList200ResponseAnnotationsItemUnderlineActionsCursorExit $cursorExit;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemUnderlineActionsMouseDown $mouseDown
     */
    #[JsonProperty('mouseDown')]
    public ?DocAnnotationsList200ResponseAnnotationsItemUnderlineActionsMouseDown $mouseDown;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemUnderlineActionsMouseUp $mouseUp
     */
    #[JsonProperty('mouseUp')]
    public ?DocAnnotationsList200ResponseAnnotationsItemUnderlineActionsMouseUp $mouseUp;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemUnderlineActionsFocus $focus
     */
    #[JsonProperty('focus')]
    public ?DocAnnotationsList200ResponseAnnotationsItemUnderlineActionsFocus $focus;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemUnderlineActionsBlur $blur
     */
    #[JsonProperty('blur')]
    public ?DocAnnotationsList200ResponseAnnotationsItemUnderlineActionsBlur $blur;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemUnderlineActionsPageOpen $pageOpen
     */
    #[JsonProperty('pageOpen')]
    public ?DocAnnotationsList200ResponseAnnotationsItemUnderlineActionsPageOpen $pageOpen;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemUnderlineActionsPageClose $pageClose
     */
    #[JsonProperty('pageClose')]
    public ?DocAnnotationsList200ResponseAnnotationsItemUnderlineActionsPageClose $pageClose;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemUnderlineActionsPageVisible $pageVisible
     */
    #[JsonProperty('pageVisible')]
    public ?DocAnnotationsList200ResponseAnnotationsItemUnderlineActionsPageVisible $pageVisible;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemUnderlineActionsPageInvisible $pageInvisible
     */
    #[JsonProperty('pageInvisible')]
    public ?DocAnnotationsList200ResponseAnnotationsItemUnderlineActionsPageInvisible $pageInvisible;

    /**
     * @param array{
     *   activate?: ?DocAnnotationsList200ResponseAnnotationsItemUnderlineActionsActivate,
     *   cursorEnter?: ?DocAnnotationsList200ResponseAnnotationsItemUnderlineActionsCursorEnter,
     *   cursorExit?: ?DocAnnotationsList200ResponseAnnotationsItemUnderlineActionsCursorExit,
     *   mouseDown?: ?DocAnnotationsList200ResponseAnnotationsItemUnderlineActionsMouseDown,
     *   mouseUp?: ?DocAnnotationsList200ResponseAnnotationsItemUnderlineActionsMouseUp,
     *   focus?: ?DocAnnotationsList200ResponseAnnotationsItemUnderlineActionsFocus,
     *   blur?: ?DocAnnotationsList200ResponseAnnotationsItemUnderlineActionsBlur,
     *   pageOpen?: ?DocAnnotationsList200ResponseAnnotationsItemUnderlineActionsPageOpen,
     *   pageClose?: ?DocAnnotationsList200ResponseAnnotationsItemUnderlineActionsPageClose,
     *   pageVisible?: ?DocAnnotationsList200ResponseAnnotationsItemUnderlineActionsPageVisible,
     *   pageInvisible?: ?DocAnnotationsList200ResponseAnnotationsItemUnderlineActionsPageInvisible,
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
