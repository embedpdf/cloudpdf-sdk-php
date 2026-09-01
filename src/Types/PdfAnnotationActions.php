<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class PdfAnnotationActions extends JsonSerializableType
{
    /**
     * @var ?PdfActionTree $activate
     */
    #[JsonProperty('activate')]
    public ?PdfActionTree $activate;

    /**
     * @var ?PdfActionTree $cursorEnter
     */
    #[JsonProperty('cursorEnter')]
    public ?PdfActionTree $cursorEnter;

    /**
     * @var ?PdfActionTree $cursorExit
     */
    #[JsonProperty('cursorExit')]
    public ?PdfActionTree $cursorExit;

    /**
     * @var ?PdfActionTree $mouseDown
     */
    #[JsonProperty('mouseDown')]
    public ?PdfActionTree $mouseDown;

    /**
     * @var ?PdfActionTree $mouseUp
     */
    #[JsonProperty('mouseUp')]
    public ?PdfActionTree $mouseUp;

    /**
     * @var ?PdfActionTree $focus
     */
    #[JsonProperty('focus')]
    public ?PdfActionTree $focus;

    /**
     * @var ?PdfActionTree $blur
     */
    #[JsonProperty('blur')]
    public ?PdfActionTree $blur;

    /**
     * @var ?PdfActionTree $pageOpen
     */
    #[JsonProperty('pageOpen')]
    public ?PdfActionTree $pageOpen;

    /**
     * @var ?PdfActionTree $pageClose
     */
    #[JsonProperty('pageClose')]
    public ?PdfActionTree $pageClose;

    /**
     * @var ?PdfActionTree $pageVisible
     */
    #[JsonProperty('pageVisible')]
    public ?PdfActionTree $pageVisible;

    /**
     * @var ?PdfActionTree $pageInvisible
     */
    #[JsonProperty('pageInvisible')]
    public ?PdfActionTree $pageInvisible;

    /**
     * @param array{
     *   activate?: ?PdfActionTree,
     *   cursorEnter?: ?PdfActionTree,
     *   cursorExit?: ?PdfActionTree,
     *   mouseDown?: ?PdfActionTree,
     *   mouseUp?: ?PdfActionTree,
     *   focus?: ?PdfActionTree,
     *   blur?: ?PdfActionTree,
     *   pageOpen?: ?PdfActionTree,
     *   pageClose?: ?PdfActionTree,
     *   pageVisible?: ?PdfActionTree,
     *   pageInvisible?: ?PdfActionTree,
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
