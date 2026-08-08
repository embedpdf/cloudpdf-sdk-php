<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

class DocAnnotationsList200ResponseAnnotationsItemStrikeoutActions extends JsonSerializableType
{
    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemStrikeoutActionsActivate $activate
     */
    #[JsonProperty('activate')]
    public ?DocAnnotationsList200ResponseAnnotationsItemStrikeoutActionsActivate $activate;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemStrikeoutActionsCursorEnter $cursorEnter
     */
    #[JsonProperty('cursorEnter')]
    public ?DocAnnotationsList200ResponseAnnotationsItemStrikeoutActionsCursorEnter $cursorEnter;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemStrikeoutActionsCursorExit $cursorExit
     */
    #[JsonProperty('cursorExit')]
    public ?DocAnnotationsList200ResponseAnnotationsItemStrikeoutActionsCursorExit $cursorExit;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemStrikeoutActionsMouseDown $mouseDown
     */
    #[JsonProperty('mouseDown')]
    public ?DocAnnotationsList200ResponseAnnotationsItemStrikeoutActionsMouseDown $mouseDown;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemStrikeoutActionsMouseUp $mouseUp
     */
    #[JsonProperty('mouseUp')]
    public ?DocAnnotationsList200ResponseAnnotationsItemStrikeoutActionsMouseUp $mouseUp;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemStrikeoutActionsFocus $focus
     */
    #[JsonProperty('focus')]
    public ?DocAnnotationsList200ResponseAnnotationsItemStrikeoutActionsFocus $focus;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemStrikeoutActionsBlur $blur
     */
    #[JsonProperty('blur')]
    public ?DocAnnotationsList200ResponseAnnotationsItemStrikeoutActionsBlur $blur;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemStrikeoutActionsPageOpen $pageOpen
     */
    #[JsonProperty('pageOpen')]
    public ?DocAnnotationsList200ResponseAnnotationsItemStrikeoutActionsPageOpen $pageOpen;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemStrikeoutActionsPageClose $pageClose
     */
    #[JsonProperty('pageClose')]
    public ?DocAnnotationsList200ResponseAnnotationsItemStrikeoutActionsPageClose $pageClose;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemStrikeoutActionsPageVisible $pageVisible
     */
    #[JsonProperty('pageVisible')]
    public ?DocAnnotationsList200ResponseAnnotationsItemStrikeoutActionsPageVisible $pageVisible;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemStrikeoutActionsPageInvisible $pageInvisible
     */
    #[JsonProperty('pageInvisible')]
    public ?DocAnnotationsList200ResponseAnnotationsItemStrikeoutActionsPageInvisible $pageInvisible;

    /**
     * @param array{
     *   activate?: ?DocAnnotationsList200ResponseAnnotationsItemStrikeoutActionsActivate,
     *   cursorEnter?: ?DocAnnotationsList200ResponseAnnotationsItemStrikeoutActionsCursorEnter,
     *   cursorExit?: ?DocAnnotationsList200ResponseAnnotationsItemStrikeoutActionsCursorExit,
     *   mouseDown?: ?DocAnnotationsList200ResponseAnnotationsItemStrikeoutActionsMouseDown,
     *   mouseUp?: ?DocAnnotationsList200ResponseAnnotationsItemStrikeoutActionsMouseUp,
     *   focus?: ?DocAnnotationsList200ResponseAnnotationsItemStrikeoutActionsFocus,
     *   blur?: ?DocAnnotationsList200ResponseAnnotationsItemStrikeoutActionsBlur,
     *   pageOpen?: ?DocAnnotationsList200ResponseAnnotationsItemStrikeoutActionsPageOpen,
     *   pageClose?: ?DocAnnotationsList200ResponseAnnotationsItemStrikeoutActionsPageClose,
     *   pageVisible?: ?DocAnnotationsList200ResponseAnnotationsItemStrikeoutActionsPageVisible,
     *   pageInvisible?: ?DocAnnotationsList200ResponseAnnotationsItemStrikeoutActionsPageInvisible,
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
