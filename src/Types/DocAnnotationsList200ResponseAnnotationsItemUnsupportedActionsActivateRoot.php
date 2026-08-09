<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocAnnotationsList200ResponseAnnotationsItemUnsupportedActionsActivateRoot extends JsonSerializableType
{
    /**
     * @var value-of<DocAnnotationsList200ResponseAnnotationsItemUnsupportedActionsActivateRootType> $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var string $subtype
     */
    #[JsonProperty('subtype')]
    public string $subtype;

    /**
     * @var ?string $script
     */
    #[JsonProperty('script')]
    public ?string $script;

    /**
     * @var array<mixed> $next
     */
    #[JsonProperty('next'), ArrayType(['mixed'])]
    public array $next;

    /**
     * @param array{
     *   type: value-of<DocAnnotationsList200ResponseAnnotationsItemUnsupportedActionsActivateRootType>,
     *   subtype: string,
     *   next: array<mixed>,
     *   script?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->type = $values['type'];
        $this->subtype = $values['subtype'];
        $this->script = $values['script'] ?? null;
        $this->next = $values['next'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
