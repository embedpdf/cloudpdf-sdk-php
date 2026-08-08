<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

class TenantsDeleteResponse extends JsonSerializableType
{
    /**
     * @var TenantsDeleteResponseError $error
     */
    #[JsonProperty('error')]
    public TenantsDeleteResponseError $error;

    /**
     * @param array{
     *   error: TenantsDeleteResponseError,
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
