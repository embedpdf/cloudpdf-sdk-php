<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

class TokensRevokeResponse extends JsonSerializableType
{
    /**
     * @var TokensRevokeResponseError $error
     */
    #[JsonProperty('error')]
    public TokensRevokeResponseError $error;

    /**
     * @param array{
     *   error: TokensRevokeResponseError,
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
