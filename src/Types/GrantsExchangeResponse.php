<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use DateTime;
use CloudPDF\Core\Types\Date;

class GrantsExchangeResponse extends JsonSerializableType
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
     * @var value-of<GrantsExchangeResponseLayerMode> $layerMode
     */
    #[JsonProperty('layerMode')]
    public string $layerMode;

    /**
     * @var GrantsExchangeResponseVisitor $visitor
     */
    #[JsonProperty('visitor')]
    public GrantsExchangeResponseVisitor $visitor;

    /**
     * @var DateTime $expiresAt
     */
    #[JsonProperty('expiresAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $expiresAt;

    /**
     * @param array{
     *   token: string,
     *   docId: string,
     *   layerName: string,
     *   layerMode: value-of<GrantsExchangeResponseLayerMode>,
     *   visitor: GrantsExchangeResponseVisitor,
     *   expiresAt: DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->token = $values['token'];
        $this->docId = $values['docId'];
        $this->layerName = $values['layerName'];
        $this->layerMode = $values['layerMode'];
        $this->visitor = $values['visitor'];
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
