<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class TokensIssue403Response extends JsonSerializableType
{
    /**
     * @var TokensIssue403ResponseError $error
     */
    #[JsonProperty('error')]
    public TokensIssue403ResponseError $error;

    /**
     * @param array{
     *   error: TokensIssue403ResponseError,
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
