<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocHead200ResponseAccess extends JsonSerializableType
{
    /**
     * @var bool $required
     */
    #[JsonProperty('required')]
    public bool $required;

    /**
     * @var array<value-of<DocHead200ResponseAccessReasonsItem>> $reasons
     */
    #[JsonProperty('reasons'), ArrayType(['string'])]
    public array $reasons;

    /**
     * @var ?string $endpoint
     */
    #[JsonProperty('endpoint')]
    public ?string $endpoint;

    /**
     * @param array{
     *   required: bool,
     *   reasons: array<value-of<DocHead200ResponseAccessReasonsItem>>,
     *   endpoint?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->required = $values['required'];
        $this->reasons = $values['reasons'];
        $this->endpoint = $values['endpoint'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
