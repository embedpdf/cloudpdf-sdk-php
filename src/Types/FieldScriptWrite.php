<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class FieldScriptWrite extends JsonSerializableType
{
    /**
     * @var value-of<FieldScriptWriteType> $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var string $script
     */
    #[JsonProperty('script')]
    public string $script;

    /**
     * @var ?array<mixed> $next
     */
    #[JsonProperty('next'), ArrayType(['mixed'])]
    public ?array $next;

    /**
     * @param array{
     *   type: value-of<FieldScriptWriteType>,
     *   script: string,
     *   next?: ?array<mixed>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->type = $values['type'];
        $this->script = $values['script'];
        $this->next = $values['next'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
