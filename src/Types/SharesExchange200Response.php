<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class SharesExchange200Response extends JsonSerializableType
{
    /**
     * @var string $token
     */
    #[JsonProperty('token')]
    public string $token;

    /**
     * @var string $docId
     */
    #[JsonProperty('docId')]
    public string $docId;

    /**
     * @var string $layerName
     */
    #[JsonProperty('layerName')]
    public string $layerName;

    /**
     * @var float $expiresAt
     */
    #[JsonProperty('expiresAt')]
    public float $expiresAt;

    /**
     * @param array{
     *   token: string,
     *   docId: string,
     *   layerName: string,
     *   expiresAt: float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->token = $values['token'];
        $this->docId = $values['docId'];
        $this->layerName = $values['layerName'];
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
