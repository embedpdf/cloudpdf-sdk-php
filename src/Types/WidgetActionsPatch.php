<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class WidgetActionsPatch extends JsonSerializableType
{
    /**
     * @var ?PdfActionWrite $activate
     */
    #[JsonProperty('activate')]
    public ?PdfActionWrite $activate;

    /**
     * @var ?PdfActionWrite $cursorEnter
     */
    #[JsonProperty('cursorEnter')]
    public ?PdfActionWrite $cursorEnter;

    /**
     * @var ?PdfActionWrite $cursorExit
     */
    #[JsonProperty('cursorExit')]
    public ?PdfActionWrite $cursorExit;

    /**
     * @var ?PdfActionWrite $mouseDown
     */
    #[JsonProperty('mouseDown')]
    public ?PdfActionWrite $mouseDown;

    /**
     * @var ?PdfActionWrite $mouseUp
     */
    #[JsonProperty('mouseUp')]
    public ?PdfActionWrite $mouseUp;

    /**
     * @var ?PdfActionWrite $focus
     */
    #[JsonProperty('focus')]
    public ?PdfActionWrite $focus;

    /**
     * @var ?PdfActionWrite $blur
     */
    #[JsonProperty('blur')]
    public ?PdfActionWrite $blur;

    /**
     * @var ?PdfActionWrite $pageOpen
     */
    #[JsonProperty('pageOpen')]
    public ?PdfActionWrite $pageOpen;

    /**
     * @var ?PdfActionWrite $pageClose
     */
    #[JsonProperty('pageClose')]
    public ?PdfActionWrite $pageClose;

    /**
     * @var ?PdfActionWrite $pageVisible
     */
    #[JsonProperty('pageVisible')]
    public ?PdfActionWrite $pageVisible;

    /**
     * @var ?PdfActionWrite $pageInvisible
     */
    #[JsonProperty('pageInvisible')]
    public ?PdfActionWrite $pageInvisible;

    /**
     * @param array{
     *   activate?: ?PdfActionWrite,
     *   cursorEnter?: ?PdfActionWrite,
     *   cursorExit?: ?PdfActionWrite,
     *   mouseDown?: ?PdfActionWrite,
     *   mouseUp?: ?PdfActionWrite,
     *   focus?: ?PdfActionWrite,
     *   blur?: ?PdfActionWrite,
     *   pageOpen?: ?PdfActionWrite,
     *   pageClose?: ?PdfActionWrite,
     *   pageVisible?: ?PdfActionWrite,
     *   pageInvisible?: ?PdfActionWrite,
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
