<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

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
