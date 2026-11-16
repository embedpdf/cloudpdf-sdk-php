<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocSignaturesValidationInfoResponse extends JsonSerializableType
{
    /**
     * @var array<string> $certificates
     */
    #[JsonProperty('certificates'), ArrayType(['string'])]
    public array $certificates;

    /**
     * @var array<string> $ocspResponses
     */
    #[JsonProperty('ocspResponses'), ArrayType(['string'])]
    public array $ocspResponses;

    /**
     * @var array<string> $crls
     */
    #[JsonProperty('crls'), ArrayType(['string'])]
    public array $crls;

    /**
     * @param array{
     *   certificates: array<string>,
     *   ocspResponses: array<string>,
     *   crls: array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->certificates = $values['certificates'];
        $this->ocspResponses = $values['ocspResponses'];
        $this->crls = $values['crls'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
