<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

class TenantsGet404Response extends JsonSerializableType
{
    /**
     * @var TenantsGet404ResponseError $error
     */
    #[JsonProperty('error')]
    public TenantsGet404ResponseError $error;

    /**
     * @param array{
     *   error: TenantsGet404ResponseError,
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
