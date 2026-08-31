<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFileAttachmentActionsCursorEnter extends JsonSerializableType
{
    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFileAttachmentActionsCursorEnterRoot $root
     */
    #[JsonProperty('root')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFileAttachmentActionsCursorEnterRoot $root;

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
     * @var array<value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFileAttachmentActionsCursorEnterWarningsItem>> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @param array{
     *   incomplete: bool,
     *   warningFlags: int,
     *   warnings: array<value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFileAttachmentActionsCursorEnterWarningsItem>>,
     *   root?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFileAttachmentActionsCursorEnterRoot,
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
