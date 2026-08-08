<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

class TenantsList400Response extends JsonSerializableType
{
    /**
     * @var TenantsList400ResponseError $error
     */
    #[JsonProperty('error')]
    public TenantsList400ResponseError $error;

    /**
     * @param array{
     *   error: TenantsList400ResponseError,
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
