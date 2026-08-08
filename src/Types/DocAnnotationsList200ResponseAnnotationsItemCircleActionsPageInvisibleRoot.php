<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;
use Cloudpdf\Core\Types\ArrayType;

class DocAnnotationsList200ResponseAnnotationsItemCircleActionsPageInvisibleRoot extends JsonSerializableType
{
    /**
     * @var value-of<DocAnnotationsList200ResponseAnnotationsItemCircleActionsPageInvisibleRootType> $type
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
     *   type: value-of<DocAnnotationsList200ResponseAnnotationsItemCircleActionsPageInvisibleRootType>,
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
