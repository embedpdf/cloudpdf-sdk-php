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
     * @var PdfActionNodeSubmitFormPayloadFlags $flags
     */
    #[JsonProperty('flags')]
    public PdfActionNodeSubmitFormPayloadFlags $flags;

    /**
     * @var ?string $charSet
     */
    #[JsonProperty('charSet')]
    public ?string $charSet;

    /**
     * @param array{
     *   url: string,
     *   flags: PdfActionNodeSubmitFormPayloadFlags,
     *   fields?: ?array<PdfActionTargetRef>,
     *   charSet?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->url = $values['url'];
        $this->fields = $values['fields'] ?? null;
        $this->flags = $values['flags'];
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
