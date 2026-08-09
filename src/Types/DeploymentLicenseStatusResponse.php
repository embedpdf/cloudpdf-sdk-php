<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DeploymentLicenseStatusResponse extends JsonSerializableType
{
    /**
     * @var mixed $license
     */
    #[JsonProperty('license')]
    public mixed $license;

    /**
     * @var mixed $reporting
     */
    #[JsonProperty('reporting')]
    public mixed $reporting;

    /**
     * @var mixed $usage
     */
    #[JsonProperty('usage')]
    public mixed $usage;

    /**
     * @param array{
     *   license?: mixed,
     *   reporting?: mixed,
     *   usage?: mixed,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->license = $values['license'] ?? null;
        $this->reporting = $values['reporting'] ?? null;
        $this->usage = $values['usage'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
