<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocumentActionsSnapshotNameTreeScriptsItem extends JsonSerializableType
{
    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var PdfActionTree $action
     */
    #[JsonProperty('action')]
    public PdfActionTree $action;

    /**
     * @param array{
     *   name: string,
     *   action: PdfActionTree,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->action = $values['action'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
