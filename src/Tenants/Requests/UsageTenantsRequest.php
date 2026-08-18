<?php

namespace CloudPDF\Tenants\Requests;

use CloudPDF\Core\Json\JsonSerializableType;

class UsageTenantsRequest extends JsonSerializableType
{
    /**
     * @var ?string $period
     */
    public ?string $period;

    /**
     * @param array{
     *   period?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->period = $values['period'] ?? null;
    }
}
