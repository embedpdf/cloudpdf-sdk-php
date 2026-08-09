<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class TokensIssue404Response extends JsonSerializableType
{
    /**
     * @var TokensIssue404ResponseError $error
     */
    #[JsonProperty('error')]
    public TokensIssue404ResponseError $error;

    /**
     * @param array{
     *   error: TokensIssue404ResponseError,
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
