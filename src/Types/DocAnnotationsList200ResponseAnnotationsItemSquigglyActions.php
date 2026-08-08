<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

class DocAnnotationsList200ResponseAnnotationsItemSquigglyActions extends JsonSerializableType
{
    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemSquigglyActionsActivate $activate
     */
    #[JsonProperty('activate')]
    public ?DocAnnotationsList200ResponseAnnotationsItemSquigglyActionsActivate $activate;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemSquigglyActionsCursorEnter $cursorEnter
     */
    #[JsonProperty('cursorEnter')]
    public ?DocAnnotationsList200ResponseAnnotationsItemSquigglyActionsCursorEnter $cursorEnter;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemSquigglyActionsCursorExit $cursorExit
     */
    #[JsonProperty('cursorExit')]
    public ?DocAnnotationsList200ResponseAnnotationsItemSquigglyActionsCursorExit $cursorExit;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemSquigglyActionsMouseDown $mouseDown
     */
    #[JsonProperty('mouseDown')]
    public ?DocAnnotationsList200ResponseAnnotationsItemSquigglyActionsMouseDown $mouseDown;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemSquigglyActionsMouseUp $mouseUp
     */
    #[JsonProperty('mouseUp')]
    public ?DocAnnotationsList200ResponseAnnotationsItemSquigglyActionsMouseUp $mouseUp;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemSquigglyActionsFocus $focus
     */
    #[JsonProperty('focus')]
    public ?DocAnnotationsList200ResponseAnnotationsItemSquigglyActionsFocus $focus;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemSquigglyActionsBlur $blur
     */
    #[JsonProperty('blur')]
    public ?DocAnnotationsList200ResponseAnnotationsItemSquigglyActionsBlur $blur;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemSquigglyActionsPageOpen $pageOpen
     */
    #[JsonProperty('pageOpen')]
    public ?DocAnnotationsList200ResponseAnnotationsItemSquigglyActionsPageOpen $pageOpen;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemSquigglyActionsPageClose $pageClose
     */
    #[JsonProperty('pageClose')]
    public ?DocAnnotationsList200ResponseAnnotationsItemSquigglyActionsPageClose $pageClose;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemSquigglyActionsPageVisible $pageVisible
     */
    #[JsonProperty('pageVisible')]
    public ?DocAnnotationsList200ResponseAnnotationsItemSquigglyActionsPageVisible $pageVisible;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemSquigglyActionsPageInvisible $pageInvisible
     */
    #[JsonProperty('pageInvisible')]
    public ?DocAnnotationsList200ResponseAnnotationsItemSquigglyActionsPageInvisible $pageInvisible;

    /**
     * @param array{
     *   activate?: ?DocAnnotationsList200ResponseAnnotationsItemSquigglyActionsActivate,
     *   cursorEnter?: ?DocAnnotationsList200ResponseAnnotationsItemSquigglyActionsCursorEnter,
     *   cursorExit?: ?DocAnnotationsList200ResponseAnnotationsItemSquigglyActionsCursorExit,
     *   mouseDown?: ?DocAnnotationsList200ResponseAnnotationsItemSquigglyActionsMouseDown,
     *   mouseUp?: ?DocAnnotationsList200ResponseAnnotationsItemSquigglyActionsMouseUp,
     *   focus?: ?DocAnnotationsList200ResponseAnnotationsItemSquigglyActionsFocus,
     *   blur?: ?DocAnnotationsList200ResponseAnnotationsItemSquigglyActionsBlur,
     *   pageOpen?: ?DocAnnotationsList200ResponseAnnotationsItemSquigglyActionsPageOpen,
     *   pageClose?: ?DocAnnotationsList200ResponseAnnotationsItemSquigglyActionsPageClose,
     *   pageVisible?: ?DocAnnotationsList200ResponseAnnotationsItemSquigglyActionsPageVisible,
     *   pageInvisible?: ?DocAnnotationsList200ResponseAnnotationsItemSquigglyActionsPageInvisible,
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
