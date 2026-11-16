<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocSignaturesAddValidationInfoResponseAdded extends JsonSerializableType
{
    /**
     * @var int $certificates
     */
    #[JsonProperty('certificates')]
    public int $certificates;

    /**
     * @var int $ocspResponses
     */
    #[JsonProperty('ocspResponses')]
    public int $ocspResponses;

    /**
     * @var int $crls
     */
    #[JsonProperty('crls')]
    public int $crls;

    /**
     * @param array{
     *   certificates: int,
     *   ocspResponses: int,
     *   crls: int,
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
