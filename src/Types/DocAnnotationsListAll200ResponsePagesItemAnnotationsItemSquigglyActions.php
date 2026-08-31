<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquigglyActions extends JsonSerializableType
{
    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquigglyActionsActivate $activate
     */
    #[JsonProperty('activate')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquigglyActionsActivate $activate;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquigglyActionsCursorEnter $cursorEnter
     */
    #[JsonProperty('cursorEnter')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquigglyActionsCursorEnter $cursorEnter;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquigglyActionsCursorExit $cursorExit
     */
    #[JsonProperty('cursorExit')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquigglyActionsCursorExit $cursorExit;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquigglyActionsMouseDown $mouseDown
     */
    #[JsonProperty('mouseDown')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquigglyActionsMouseDown $mouseDown;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquigglyActionsMouseUp $mouseUp
     */
    #[JsonProperty('mouseUp')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquigglyActionsMouseUp $mouseUp;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquigglyActionsFocus $focus
     */
    #[JsonProperty('focus')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquigglyActionsFocus $focus;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquigglyActionsBlur $blur
     */
    #[JsonProperty('blur')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquigglyActionsBlur $blur;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquigglyActionsPageOpen $pageOpen
     */
    #[JsonProperty('pageOpen')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquigglyActionsPageOpen $pageOpen;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquigglyActionsPageClose $pageClose
     */
    #[JsonProperty('pageClose')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquigglyActionsPageClose $pageClose;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquigglyActionsPageVisible $pageVisible
     */
    #[JsonProperty('pageVisible')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquigglyActionsPageVisible $pageVisible;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquigglyActionsPageInvisible $pageInvisible
     */
    #[JsonProperty('pageInvisible')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquigglyActionsPageInvisible $pageInvisible;

    /**
     * @param array{
     *   activate?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquigglyActionsActivate,
     *   cursorEnter?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquigglyActionsCursorEnter,
     *   cursorExit?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquigglyActionsCursorExit,
     *   mouseDown?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquigglyActionsMouseDown,
     *   mouseUp?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquigglyActionsMouseUp,
     *   focus?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquigglyActionsFocus,
     *   blur?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquigglyActionsBlur,
     *   pageOpen?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquigglyActionsPageOpen,
     *   pageClose?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquigglyActionsPageClose,
     *   pageVisible?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquigglyActionsPageVisible,
     *   pageInvisible?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquigglyActionsPageInvisible,
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
