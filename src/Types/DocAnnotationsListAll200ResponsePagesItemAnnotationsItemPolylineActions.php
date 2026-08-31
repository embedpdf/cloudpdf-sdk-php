<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineActions extends JsonSerializableType
{
    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineActionsActivate $activate
     */
    #[JsonProperty('activate')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineActionsActivate $activate;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineActionsCursorEnter $cursorEnter
     */
    #[JsonProperty('cursorEnter')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineActionsCursorEnter $cursorEnter;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineActionsCursorExit $cursorExit
     */
    #[JsonProperty('cursorExit')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineActionsCursorExit $cursorExit;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineActionsMouseDown $mouseDown
     */
    #[JsonProperty('mouseDown')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineActionsMouseDown $mouseDown;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineActionsMouseUp $mouseUp
     */
    #[JsonProperty('mouseUp')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineActionsMouseUp $mouseUp;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineActionsFocus $focus
     */
    #[JsonProperty('focus')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineActionsFocus $focus;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineActionsBlur $blur
     */
    #[JsonProperty('blur')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineActionsBlur $blur;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineActionsPageOpen $pageOpen
     */
    #[JsonProperty('pageOpen')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineActionsPageOpen $pageOpen;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineActionsPageClose $pageClose
     */
    #[JsonProperty('pageClose')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineActionsPageClose $pageClose;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineActionsPageVisible $pageVisible
     */
    #[JsonProperty('pageVisible')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineActionsPageVisible $pageVisible;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineActionsPageInvisible $pageInvisible
     */
    #[JsonProperty('pageInvisible')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineActionsPageInvisible $pageInvisible;

    /**
     * @param array{
     *   activate?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineActionsActivate,
     *   cursorEnter?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineActionsCursorEnter,
     *   cursorExit?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineActionsCursorExit,
     *   mouseDown?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineActionsMouseDown,
     *   mouseUp?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineActionsMouseUp,
     *   focus?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineActionsFocus,
     *   blur?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineActionsBlur,
     *   pageOpen?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineActionsPageOpen,
     *   pageClose?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineActionsPageClose,
     *   pageVisible?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineActionsPageVisible,
     *   pageInvisible?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineActionsPageInvisible,
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
