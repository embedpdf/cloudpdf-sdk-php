<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class FieldLockSpec extends JsonSerializableType
{
    /**
     * @var value-of<FieldLockSpecAction> $action
     */
    #[JsonProperty('action')]
    public string $action;

    /**
     * @var array<string> $fields
     */
    #[JsonProperty('fields'), ArrayType(['string'])]
    public array $fields;

    /**
     * @var ?int $permission
     */
    #[JsonProperty('permission')]
    public ?int $permission;

    /**
     * @param array{
     *   action: value-of<FieldLockSpecAction>,
     *   fields: array<string>,
     *   permission?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->action = $values['action'];
        $this->fields = $values['fields'];
        $this->permission = $values['permission'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
