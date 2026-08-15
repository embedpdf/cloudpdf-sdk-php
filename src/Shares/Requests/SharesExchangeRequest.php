<?php

namespace CloudPDF\Shares\Requests;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class SharesExchangeRequest extends JsonSerializableType
{
    /**
     * @var string $shareToken
     */
    #[JsonProperty('shareToken')]
    public string $shareToken;

    /**
     * @var ?string $password
     */
    #[JsonProperty('password')]
    public ?string $password;

    /**
     * @param array{
     *   shareToken: string,
     *   password?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->shareToken = $values['shareToken'];
        $this->password = $values['password'] ?? null;
    }
}
