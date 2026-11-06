<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class PdfActionWriteSubmitForm extends JsonSerializableType
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
     * @var ?bool $exclude
     */
    #[JsonProperty('exclude')]
    public ?bool $exclude;

    /**
     * @var ?bool $includeNoValueFields
     */
    #[JsonProperty('includeNoValueFields')]
    public ?bool $includeNoValueFields;

    /**
     * @var ?value-of<PdfActionWriteSubmitFormFormat> $format
     */
    #[JsonProperty('format')]
    public ?string $format;

    /**
     * @var ?value-of<PdfActionWriteSubmitFormMethod> $method
     */
    #[JsonProperty('method')]
    public ?string $method;

    /**
     * @var ?bool $submitCoordinates
     */
    #[JsonProperty('submitCoordinates')]
    public ?bool $submitCoordinates;

    /**
     * @var ?bool $includeAppendSaves
     */
    #[JsonProperty('includeAppendSaves')]
    public ?bool $includeAppendSaves;

    /**
     * @var ?bool $includeAnnotations
     */
    #[JsonProperty('includeAnnotations')]
    public ?bool $includeAnnotations;

    /**
     * @var ?bool $canonicalFormat
     */
    #[JsonProperty('canonicalFormat')]
    public ?bool $canonicalFormat;

    /**
     * @var ?bool $exclNonUserAnnots
     */
    #[JsonProperty('exclNonUserAnnots')]
    public ?bool $exclNonUserAnnots;

    /**
     * @var ?bool $exclFKey
     */
    #[JsonProperty('exclFKey')]
    public ?bool $exclFKey;

    /**
     * @var ?bool $embedForm
     */
    #[JsonProperty('embedForm')]
    public ?bool $embedForm;

    /**
     * @var ?array<mixed> $next
     */
    #[JsonProperty('next'), ArrayType(['mixed'])]
    public ?array $next;

    /**
     * @param array{
     *   url: string,
     *   fields?: ?array<PdfActionTargetRef>,
     *   exclude?: ?bool,
     *   includeNoValueFields?: ?bool,
     *   format?: ?value-of<PdfActionWriteSubmitFormFormat>,
     *   method?: ?value-of<PdfActionWriteSubmitFormMethod>,
     *   submitCoordinates?: ?bool,
     *   includeAppendSaves?: ?bool,
     *   includeAnnotations?: ?bool,
     *   canonicalFormat?: ?bool,
     *   exclNonUserAnnots?: ?bool,
     *   exclFKey?: ?bool,
     *   embedForm?: ?bool,
     *   next?: ?array<mixed>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->url = $values['url'];
        $this->fields = $values['fields'] ?? null;
        $this->exclude = $values['exclude'] ?? null;
        $this->includeNoValueFields = $values['includeNoValueFields'] ?? null;
        $this->format = $values['format'] ?? null;
        $this->method = $values['method'] ?? null;
        $this->submitCoordinates = $values['submitCoordinates'] ?? null;
        $this->includeAppendSaves = $values['includeAppendSaves'] ?? null;
        $this->includeAnnotations = $values['includeAnnotations'] ?? null;
        $this->canonicalFormat = $values['canonicalFormat'] ?? null;
        $this->exclNonUserAnnots = $values['exclNonUserAnnots'] ?? null;
        $this->exclFKey = $values['exclFKey'] ?? null;
        $this->embedForm = $values['embedForm'] ?? null;
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
