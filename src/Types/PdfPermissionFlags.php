<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class PdfPermissionFlags extends JsonSerializableType
{
    /**
     * @var bool $print
     */
    #[JsonProperty('print')]
    public bool $print;

    /**
     * @var bool $modifyContents
     */
    #[JsonProperty('modifyContents')]
    public bool $modifyContents;

    /**
     * @var bool $copy
     */
    #[JsonProperty('copy')]
    public bool $copy;

    /**
     * @var bool $modifyAnnotations
     */
    #[JsonProperty('modifyAnnotations')]
    public bool $modifyAnnotations;

    /**
     * @var bool $fillForms
     */
    #[JsonProperty('fillForms')]
    public bool $fillForms;

    /**
     * @var bool $copyForAccessibility
     */
    #[JsonProperty('copyForAccessibility')]
    public bool $copyForAccessibility;

    /**
     * @var bool $assemble
     */
    #[JsonProperty('assemble')]
    public bool $assemble;

    /**
     * @var bool $printHighQuality
     */
    #[JsonProperty('printHighQuality')]
    public bool $printHighQuality;

    /**
     * @param array{
     *   print: bool,
     *   modifyContents: bool,
     *   copy: bool,
     *   modifyAnnotations: bool,
     *   fillForms: bool,
     *   copyForAccessibility: bool,
     *   assemble: bool,
     *   printHighQuality: bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->print = $values['print'];
        $this->modifyContents = $values['modifyContents'];
        $this->copy = $values['copy'];
        $this->modifyAnnotations = $values['modifyAnnotations'];
        $this->fillForms = $values['fillForms'];
        $this->copyForAccessibility = $values['copyForAccessibility'];
        $this->assemble = $values['assemble'];
        $this->printHighQuality = $values['printHighQuality'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
