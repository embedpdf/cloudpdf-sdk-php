<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

class TenantsCreate400Response extends JsonSerializableType
{
    /**
     * @var TenantsCreate400ResponseError $error
     */
    #[JsonProperty('error')]
    public TenantsCreate400ResponseError $error;

    /**
     * @param array{
     *   error: TenantsCreate400ResponseError,
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
