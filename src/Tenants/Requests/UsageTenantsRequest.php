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
     * @var ?string $from
     */
    public ?string $from;

    /**
     * @var ?string $to
     */
    public ?string $to;

    /**
     * @param array{
     *   period?: ?string,
     *   from?: ?string,
     *   to?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->period = $values['period'] ?? null;
        $this->from = $values['from'] ?? null;
        $this->to = $values['to'] ?? null;
    }
}
