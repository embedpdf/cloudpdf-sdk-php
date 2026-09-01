<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocumentActionsSnapshot extends JsonSerializableType
{
    /**
     * @var array<DocumentActionsSnapshotNameTreeScriptsItem> $nameTreeScripts
     */
    #[JsonProperty('nameTreeScripts'), ArrayType([DocumentActionsSnapshotNameTreeScriptsItem::class])]
    public array $nameTreeScripts;

    /**
     * @var ?PdfActionTree $openAction
     */
    #[JsonProperty('openAction')]
    public ?PdfActionTree $openAction;

    /**
     * @var ?PdfDestination $openDestination
     */
    #[JsonProperty('openDestination')]
    public ?PdfDestination $openDestination;

    /**
     * @var ?PdfActionTree $willClose
     */
    #[JsonProperty('willClose')]
    public ?PdfActionTree $willClose;

    /**
     * @var ?PdfActionTree $willSave
     */
    #[JsonProperty('willSave')]
    public ?PdfActionTree $willSave;

    /**
     * @var ?PdfActionTree $didSave
     */
    #[JsonProperty('didSave')]
    public ?PdfActionTree $didSave;

    /**
     * @var ?PdfActionTree $willPrint
     */
    #[JsonProperty('willPrint')]
    public ?PdfActionTree $willPrint;

    /**
     * @var ?PdfActionTree $didPrint
     */
    #[JsonProperty('didPrint')]
    public ?PdfActionTree $didPrint;

    /**
     * @param array{
     *   nameTreeScripts: array<DocumentActionsSnapshotNameTreeScriptsItem>,
     *   openAction?: ?PdfActionTree,
     *   openDestination?: ?PdfDestination,
     *   willClose?: ?PdfActionTree,
     *   willSave?: ?PdfActionTree,
     *   didSave?: ?PdfActionTree,
     *   willPrint?: ?PdfActionTree,
     *   didPrint?: ?PdfActionTree,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->nameTreeScripts = $values['nameTreeScripts'];
        $this->openAction = $values['openAction'] ?? null;
        $this->openDestination = $values['openDestination'] ?? null;
        $this->willClose = $values['willClose'] ?? null;
        $this->willSave = $values['willSave'] ?? null;
        $this->didSave = $values['didSave'] ?? null;
        $this->willPrint = $values['willPrint'] ?? null;
        $this->didPrint = $values['didPrint'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
