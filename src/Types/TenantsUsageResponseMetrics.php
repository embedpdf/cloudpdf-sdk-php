<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class TenantsUsageResponseMetrics extends JsonSerializableType
{
    /**
     * @var int $pdfViews
     */
    #[JsonProperty('pdfViews')]
    public int $pdfViews;

    /**
     * @var int $pdfUploads
     */
    #[JsonProperty('pdfUploads')]
    public int $pdfUploads;

    /**
     * @var int $storageBytes
     */
    #[JsonProperty('storageBytes')]
    public int $storageBytes;

    /**
     * @param array{
     *   pdfViews: int,
     *   pdfUploads: int,
     *   storageBytes: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->pdfViews = $values['pdfViews'];
        $this->pdfUploads = $values['pdfUploads'];
        $this->storageBytes = $values['storageBytes'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
