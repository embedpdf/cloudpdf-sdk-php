<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;
use Cloudpdf\Core\Types\ArrayType;

class DocAnnotationsList200ResponseAnnotationsItemFileAttachmentActionsPageVisible extends JsonSerializableType
{
    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemFileAttachmentActionsPageVisibleRoot $root
     */
    #[JsonProperty('root')]
    public ?DocAnnotationsList200ResponseAnnotationsItemFileAttachmentActionsPageVisibleRoot $root;

    /**
     * @var bool $incomplete
     */
    #[JsonProperty('incomplete')]
    public bool $incomplete;

    /**
     * @var int $warningFlags
     */
    #[JsonProperty('warningFlags')]
    public int $warningFlags;

    /**
     * @var array<value-of<DocAnnotationsList200ResponseAnnotationsItemFileAttachmentActionsPageVisibleWarningsItem>> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @param array{
     *   incomplete: bool,
     *   warningFlags: int,
     *   warnings: array<value-of<DocAnnotationsList200ResponseAnnotationsItemFileAttachmentActionsPageVisibleWarningsItem>>,
     *   root?: ?DocAnnotationsList200ResponseAnnotationsItemFileAttachmentActionsPageVisibleRoot,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->root = $values['root'] ?? null;
        $this->incomplete = $values['incomplete'];
        $this->warningFlags = $values['warningFlags'];
        $this->warnings = $values['warnings'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
