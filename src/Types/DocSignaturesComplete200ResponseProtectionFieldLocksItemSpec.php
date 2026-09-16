<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocSignaturesComplete200ResponseProtectionFieldLocksItemSpec extends JsonSerializableType
{
    /**
     * @var value-of<DocSignaturesComplete200ResponseProtectionFieldLocksItemSpecAction> $action
     */
    #[JsonProperty('action')]
    public string $action;

    /**
     * @var array<string> $fields
     */
    #[JsonProperty('fields'), ArrayType(['string'])]
    public array $fields;

    /**
     * @var ?float $permission
     */
    #[JsonProperty('permission')]
    public ?float $permission;

    /**
     * @param array{
     *   action: value-of<DocSignaturesComplete200ResponseProtectionFieldLocksItemSpecAction>,
     *   fields: array<string>,
     *   permission?: ?float,
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
