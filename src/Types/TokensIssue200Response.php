<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

class TokensIssue200Response extends JsonSerializableType
{
    /**
     * @var string $token
     */
    #[JsonProperty('token')]
    public string $token;

    /**
     * @var string $jti
     */
    #[JsonProperty('jti')]
    public string $jti;

    /**
     * @var float $expiresAt
     */
    #[JsonProperty('expiresAt')]
    public float $expiresAt;

    /**
     * @param array{
     *   token: string,
     *   jti: string,
     *   expiresAt: float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->token = $values['token'];
        $this->jti = $values['jti'];
        $this->expiresAt = $values['expiresAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
