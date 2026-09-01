<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class PdfActionNodeSubmitFormPayloadFlags extends JsonSerializableType
{
    /**
     * @var int $raw
     */
    #[JsonProperty('raw')]
    public int $raw;

    /**
     * @var bool $exclude
     */
    #[JsonProperty('exclude')]
    public bool $exclude;

    /**
     * @var bool $includeNoValueFields
     */
    #[JsonProperty('includeNoValueFields')]
    public bool $includeNoValueFields;

    /**
     * @var value-of<PdfActionNodeSubmitFormPayloadFlagsFormat> $format
     */
    #[JsonProperty('format')]
    public string $format;

    /**
     * @var value-of<PdfActionNodeSubmitFormPayloadFlagsMethod> $method
     */
    #[JsonProperty('method')]
    public string $method;

    /**
     * @var bool $submitCoordinates
     */
    #[JsonProperty('submitCoordinates')]
    public bool $submitCoordinates;

    /**
     * @var bool $includeAppendSaves
     */
    #[JsonProperty('includeAppendSaves')]
    public bool $includeAppendSaves;

    /**
     * @var bool $includeAnnotations
     */
    #[JsonProperty('includeAnnotations')]
    public bool $includeAnnotations;

    /**
     * @var bool $canonicalFormat
     */
    #[JsonProperty('canonicalFormat')]
    public bool $canonicalFormat;

    /**
     * @var bool $exclNonUserAnnots
     */
    #[JsonProperty('exclNonUserAnnots')]
    public bool $exclNonUserAnnots;

    /**
     * @var bool $exclFKey
     */
    #[JsonProperty('exclFKey')]
    public bool $exclFKey;

    /**
     * @var bool $embedForm
     */
    #[JsonProperty('embedForm')]
    public bool $embedForm;

    /**
     * @param array{
     *   raw: int,
     *   exclude: bool,
     *   includeNoValueFields: bool,
     *   format: value-of<PdfActionNodeSubmitFormPayloadFlagsFormat>,
     *   method: value-of<PdfActionNodeSubmitFormPayloadFlagsMethod>,
     *   submitCoordinates: bool,
     *   includeAppendSaves: bool,
     *   includeAnnotations: bool,
     *   canonicalFormat: bool,
     *   exclNonUserAnnots: bool,
     *   exclFKey: bool,
     *   embedForm: bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->raw = $values['raw'];
        $this->exclude = $values['exclude'];
        $this->includeNoValueFields = $values['includeNoValueFields'];
        $this->format = $values['format'];
        $this->method = $values['method'];
        $this->submitCoordinates = $values['submitCoordinates'];
        $this->includeAppendSaves = $values['includeAppendSaves'];
        $this->includeAnnotations = $values['includeAnnotations'];
        $this->canonicalFormat = $values['canonicalFormat'];
        $this->exclNonUserAnnots = $values['exclNonUserAnnots'];
        $this->exclFKey = $values['exclFKey'];
        $this->embedForm = $values['embedForm'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
