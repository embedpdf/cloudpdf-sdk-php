<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactActions extends JsonSerializableType
{
    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactActionsActivate $activate
     */
    #[JsonProperty('activate')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactActionsActivate $activate;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactActionsCursorEnter $cursorEnter
     */
    #[JsonProperty('cursorEnter')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactActionsCursorEnter $cursorEnter;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactActionsCursorExit $cursorExit
     */
    #[JsonProperty('cursorExit')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactActionsCursorExit $cursorExit;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactActionsMouseDown $mouseDown
     */
    #[JsonProperty('mouseDown')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactActionsMouseDown $mouseDown;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactActionsMouseUp $mouseUp
     */
    #[JsonProperty('mouseUp')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactActionsMouseUp $mouseUp;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactActionsFocus $focus
     */
    #[JsonProperty('focus')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactActionsFocus $focus;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactActionsBlur $blur
     */
    #[JsonProperty('blur')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactActionsBlur $blur;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactActionsPageOpen $pageOpen
     */
    #[JsonProperty('pageOpen')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactActionsPageOpen $pageOpen;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactActionsPageClose $pageClose
     */
    #[JsonProperty('pageClose')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactActionsPageClose $pageClose;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactActionsPageVisible $pageVisible
     */
    #[JsonProperty('pageVisible')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactActionsPageVisible $pageVisible;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactActionsPageInvisible $pageInvisible
     */
    #[JsonProperty('pageInvisible')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactActionsPageInvisible $pageInvisible;

    /**
     * @param array{
     *   activate?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactActionsActivate,
     *   cursorEnter?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactActionsCursorEnter,
     *   cursorExit?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactActionsCursorExit,
     *   mouseDown?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactActionsMouseDown,
     *   mouseUp?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactActionsMouseUp,
     *   focus?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactActionsFocus,
     *   blur?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactActionsBlur,
     *   pageOpen?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactActionsPageOpen,
     *   pageClose?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactActionsPageClose,
     *   pageVisible?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactActionsPageVisible,
     *   pageInvisible?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactActionsPageInvisible,
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
