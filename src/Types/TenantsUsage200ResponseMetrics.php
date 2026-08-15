<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class TenantsUsage200ResponseMetrics extends JsonSerializableType
{
    /**
     * @var float $pdfViews
     */
    #[JsonProperty('pdf.views')]
    public float $pdfViews;

    /**
     * @var float $pdfUploads
     */
    #[JsonProperty('pdf.uploads')]
    public float $pdfUploads;

    /**
     * @var float $storageBytes
     */
    #[JsonProperty('storage.bytes')]
    public float $storageBytes;

    /**
     * @param array{
     *   pdfViews: float,
     *   pdfUploads: float,
     *   storageBytes: float,
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
