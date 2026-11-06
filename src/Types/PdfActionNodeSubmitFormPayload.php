<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class PdfActionNodeSubmitFormPayload extends JsonSerializableType
{
    /**
     * @var string $url
     */
    #[JsonProperty('url')]
    public string $url;

    /**
     * @var ?array<PdfActionTargetRef> $fields
     */
    #[JsonProperty('fields'), ArrayType([PdfActionTargetRef::class])]
    public ?array $fields;

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
     * @var value-of<PdfActionNodeSubmitFormPayloadFormat> $format
     */
    #[JsonProperty('format')]
    public string $format;

    /**
     * @var value-of<PdfActionNodeSubmitFormPayloadMethod> $method
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
     * @var ?string $charSet
     */
    #[JsonProperty('charSet')]
    public ?string $charSet;

    /**
     * @param array{
     *   url: string,
     *   exclude: bool,
     *   includeNoValueFields: bool,
     *   format: value-of<PdfActionNodeSubmitFormPayloadFormat>,
     *   method: value-of<PdfActionNodeSubmitFormPayloadMethod>,
     *   submitCoordinates: bool,
     *   includeAppendSaves: bool,
     *   includeAnnotations: bool,
     *   canonicalFormat: bool,
     *   exclNonUserAnnots: bool,
     *   exclFKey: bool,
     *   embedForm: bool,
     *   fields?: ?array<PdfActionTargetRef>,
     *   charSet?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->url = $values['url'];
        $this->fields = $values['fields'] ?? null;
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
        $this->charSet = $values['charSet'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
