<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocFormsUpdateWidget200ResponseAppearance extends JsonSerializableType
{
    /**
     * @var value-of<DocFormsUpdateWidget200ResponseAppearanceAction> $action
     */
    #[JsonProperty('action')]
    public string $action;

    /**
     * @var bool $changed
     */
    #[JsonProperty('changed')]
    public bool $changed;

    /**
     * @param array{
     *   action: value-of<DocFormsUpdateWidget200ResponseAppearanceAction>,
     *   changed: bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->action = $values['action'];
        $this->changed = $values['changed'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
