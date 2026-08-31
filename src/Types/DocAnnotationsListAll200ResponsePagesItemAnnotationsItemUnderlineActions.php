<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnderlineActions extends JsonSerializableType
{
    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnderlineActionsActivate $activate
     */
    #[JsonProperty('activate')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnderlineActionsActivate $activate;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnderlineActionsCursorEnter $cursorEnter
     */
    #[JsonProperty('cursorEnter')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnderlineActionsCursorEnter $cursorEnter;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnderlineActionsCursorExit $cursorExit
     */
    #[JsonProperty('cursorExit')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnderlineActionsCursorExit $cursorExit;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnderlineActionsMouseDown $mouseDown
     */
    #[JsonProperty('mouseDown')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnderlineActionsMouseDown $mouseDown;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnderlineActionsMouseUp $mouseUp
     */
    #[JsonProperty('mouseUp')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnderlineActionsMouseUp $mouseUp;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnderlineActionsFocus $focus
     */
    #[JsonProperty('focus')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnderlineActionsFocus $focus;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnderlineActionsBlur $blur
     */
    #[JsonProperty('blur')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnderlineActionsBlur $blur;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnderlineActionsPageOpen $pageOpen
     */
    #[JsonProperty('pageOpen')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnderlineActionsPageOpen $pageOpen;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnderlineActionsPageClose $pageClose
     */
    #[JsonProperty('pageClose')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnderlineActionsPageClose $pageClose;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnderlineActionsPageVisible $pageVisible
     */
    #[JsonProperty('pageVisible')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnderlineActionsPageVisible $pageVisible;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnderlineActionsPageInvisible $pageInvisible
     */
    #[JsonProperty('pageInvisible')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnderlineActionsPageInvisible $pageInvisible;

    /**
     * @param array{
     *   activate?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnderlineActionsActivate,
     *   cursorEnter?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnderlineActionsCursorEnter,
     *   cursorExit?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnderlineActionsCursorExit,
     *   mouseDown?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnderlineActionsMouseDown,
     *   mouseUp?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnderlineActionsMouseUp,
     *   focus?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnderlineActionsFocus,
     *   blur?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnderlineActionsBlur,
     *   pageOpen?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnderlineActionsPageOpen,
     *   pageClose?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnderlineActionsPageClose,
     *   pageVisible?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnderlineActionsPageVisible,
     *   pageInvisible?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnderlineActionsPageInvisible,
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
