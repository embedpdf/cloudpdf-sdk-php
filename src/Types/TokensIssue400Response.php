<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class TokensIssue400Response extends JsonSerializableType
{
    /**
     * @var TokensIssue400ResponseError $error
     */
    #[JsonProperty('error')]
    public TokensIssue400ResponseError $error;

    /**
     * @param array{
     *   error: TokensIssue400ResponseError,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->error = $values['error'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
