<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

class DocAnnotationsList200ResponseAnnotationsItemFileAttachmentActions extends JsonSerializableType
{
    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemFileAttachmentActionsActivate $activate
     */
    #[JsonProperty('activate')]
    public ?DocAnnotationsList200ResponseAnnotationsItemFileAttachmentActionsActivate $activate;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemFileAttachmentActionsCursorEnter $cursorEnter
     */
    #[JsonProperty('cursorEnter')]
    public ?DocAnnotationsList200ResponseAnnotationsItemFileAttachmentActionsCursorEnter $cursorEnter;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemFileAttachmentActionsCursorExit $cursorExit
     */
    #[JsonProperty('cursorExit')]
    public ?DocAnnotationsList200ResponseAnnotationsItemFileAttachmentActionsCursorExit $cursorExit;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemFileAttachmentActionsMouseDown $mouseDown
     */
    #[JsonProperty('mouseDown')]
    public ?DocAnnotationsList200ResponseAnnotationsItemFileAttachmentActionsMouseDown $mouseDown;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemFileAttachmentActionsMouseUp $mouseUp
     */
    #[JsonProperty('mouseUp')]
    public ?DocAnnotationsList200ResponseAnnotationsItemFileAttachmentActionsMouseUp $mouseUp;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemFileAttachmentActionsFocus $focus
     */
    #[JsonProperty('focus')]
    public ?DocAnnotationsList200ResponseAnnotationsItemFileAttachmentActionsFocus $focus;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemFileAttachmentActionsBlur $blur
     */
    #[JsonProperty('blur')]
    public ?DocAnnotationsList200ResponseAnnotationsItemFileAttachmentActionsBlur $blur;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemFileAttachmentActionsPageOpen $pageOpen
     */
    #[JsonProperty('pageOpen')]
    public ?DocAnnotationsList200ResponseAnnotationsItemFileAttachmentActionsPageOpen $pageOpen;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemFileAttachmentActionsPageClose $pageClose
     */
    #[JsonProperty('pageClose')]
    public ?DocAnnotationsList200ResponseAnnotationsItemFileAttachmentActionsPageClose $pageClose;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemFileAttachmentActionsPageVisible $pageVisible
     */
    #[JsonProperty('pageVisible')]
    public ?DocAnnotationsList200ResponseAnnotationsItemFileAttachmentActionsPageVisible $pageVisible;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemFileAttachmentActionsPageInvisible $pageInvisible
     */
    #[JsonProperty('pageInvisible')]
    public ?DocAnnotationsList200ResponseAnnotationsItemFileAttachmentActionsPageInvisible $pageInvisible;

    /**
     * @param array{
     *   activate?: ?DocAnnotationsList200ResponseAnnotationsItemFileAttachmentActionsActivate,
     *   cursorEnter?: ?DocAnnotationsList200ResponseAnnotationsItemFileAttachmentActionsCursorEnter,
     *   cursorExit?: ?DocAnnotationsList200ResponseAnnotationsItemFileAttachmentActionsCursorExit,
     *   mouseDown?: ?DocAnnotationsList200ResponseAnnotationsItemFileAttachmentActionsMouseDown,
     *   mouseUp?: ?DocAnnotationsList200ResponseAnnotationsItemFileAttachmentActionsMouseUp,
     *   focus?: ?DocAnnotationsList200ResponseAnnotationsItemFileAttachmentActionsFocus,
     *   blur?: ?DocAnnotationsList200ResponseAnnotationsItemFileAttachmentActionsBlur,
     *   pageOpen?: ?DocAnnotationsList200ResponseAnnotationsItemFileAttachmentActionsPageOpen,
     *   pageClose?: ?DocAnnotationsList200ResponseAnnotationsItemFileAttachmentActionsPageClose,
     *   pageVisible?: ?DocAnnotationsList200ResponseAnnotationsItemFileAttachmentActionsPageVisible,
     *   pageInvisible?: ?DocAnnotationsList200ResponseAnnotationsItemFileAttachmentActionsPageInvisible,
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
