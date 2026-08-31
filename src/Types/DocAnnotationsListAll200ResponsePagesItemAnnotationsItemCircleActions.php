<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleActions extends JsonSerializableType
{
    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleActionsActivate $activate
     */
    #[JsonProperty('activate')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleActionsActivate $activate;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleActionsCursorEnter $cursorEnter
     */
    #[JsonProperty('cursorEnter')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleActionsCursorEnter $cursorEnter;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleActionsCursorExit $cursorExit
     */
    #[JsonProperty('cursorExit')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleActionsCursorExit $cursorExit;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleActionsMouseDown $mouseDown
     */
    #[JsonProperty('mouseDown')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleActionsMouseDown $mouseDown;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleActionsMouseUp $mouseUp
     */
    #[JsonProperty('mouseUp')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleActionsMouseUp $mouseUp;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleActionsFocus $focus
     */
    #[JsonProperty('focus')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleActionsFocus $focus;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleActionsBlur $blur
     */
    #[JsonProperty('blur')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleActionsBlur $blur;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleActionsPageOpen $pageOpen
     */
    #[JsonProperty('pageOpen')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleActionsPageOpen $pageOpen;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleActionsPageClose $pageClose
     */
    #[JsonProperty('pageClose')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleActionsPageClose $pageClose;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleActionsPageVisible $pageVisible
     */
    #[JsonProperty('pageVisible')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleActionsPageVisible $pageVisible;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleActionsPageInvisible $pageInvisible
     */
    #[JsonProperty('pageInvisible')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleActionsPageInvisible $pageInvisible;

    /**
     * @param array{
     *   activate?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleActionsActivate,
     *   cursorEnter?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleActionsCursorEnter,
     *   cursorExit?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleActionsCursorExit,
     *   mouseDown?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleActionsMouseDown,
     *   mouseUp?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleActionsMouseUp,
     *   focus?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleActionsFocus,
     *   blur?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleActionsBlur,
     *   pageOpen?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleActionsPageOpen,
     *   pageClose?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleActionsPageClose,
     *   pageVisible?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleActionsPageVisible,
     *   pageInvisible?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleActionsPageInvisible,
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
