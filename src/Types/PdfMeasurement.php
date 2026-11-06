<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

/**
 * A measure, by its `subtype`. A newer server can add subtypes: read one your client doesn't know as `unknown`.
 */
class PdfMeasurement extends JsonSerializableType
{
    /**
     * @var (
     *    'rectilinear'
     *   |'geospatial'
     *   |'unknown'
     *   |'_unknown'
     * ) $subtype
     */
    public readonly string $subtype;

    /**
     * @var (
     *    PdfMeasurementRectilinear
     *   |PdfMeasurementGeospatial
     *   |PdfMeasurementUnknown
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   subtype: (
     *    'rectilinear'
     *   |'geospatial'
     *   |'unknown'
     *   |'_unknown'
     * ),
     *   value: (
     *    PdfMeasurementRectilinear
     *   |PdfMeasurementGeospatial
     *   |PdfMeasurementUnknown
     *   |mixed
     * ),
     * } $values
     */
    private function __construct(
        array $values,
    ) {
        $this->subtype = $values['subtype'];
        $this->value = $values['value'];
    }

    /**
     * @param PdfMeasurementRectilinear $rectilinear
     * @return PdfMeasurement
     */
    public static function rectilinear(PdfMeasurementRectilinear $rectilinear): PdfMeasurement
    {
        return new PdfMeasurement([
            'subtype' => 'rectilinear',
            'value' => $rectilinear,
        ]);
    }

    /**
     * @param PdfMeasurementGeospatial $geospatial
     * @return PdfMeasurement
     */
    public static function geospatial(PdfMeasurementGeospatial $geospatial): PdfMeasurement
    {
        return new PdfMeasurement([
            'subtype' => 'geospatial',
            'value' => $geospatial,
        ]);
    }

    /**
     * @param PdfMeasurementUnknown $unknown
     * @return PdfMeasurement
     */
    public static function unknown(PdfMeasurementUnknown $unknown): PdfMeasurement
    {
        return new PdfMeasurement([
            'subtype' => 'unknown',
            'value' => $unknown,
        ]);
    }

    /**
     * @return bool
     */
    public function isRectilinear(): bool
    {
        return $this->value instanceof PdfMeasurementRectilinear && $this->subtype === 'rectilinear';
    }

    /**
     * @return PdfMeasurementRectilinear
     */
    public function asRectilinear(): PdfMeasurementRectilinear
    {
        if (!($this->value instanceof PdfMeasurementRectilinear && $this->subtype === 'rectilinear')) {
            throw new Exception(
                "Expected rectilinear; got " . $this->subtype . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isGeospatial(): bool
    {
        return $this->value instanceof PdfMeasurementGeospatial && $this->subtype === 'geospatial';
    }

    /**
     * @return PdfMeasurementGeospatial
     */
    public function asGeospatial(): PdfMeasurementGeospatial
    {
        if (!($this->value instanceof PdfMeasurementGeospatial && $this->subtype === 'geospatial')) {
            throw new Exception(
                "Expected geospatial; got " . $this->subtype . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isUnknown(): bool
    {
        return $this->value instanceof PdfMeasurementUnknown && $this->subtype === 'unknown';
    }

    /**
     * @return PdfMeasurementUnknown
     */
    public function asUnknown(): PdfMeasurementUnknown
    {
        if (!($this->value instanceof PdfMeasurementUnknown && $this->subtype === 'unknown')) {
            throw new Exception(
                "Expected unknown; got " . $this->subtype . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }

    /**
     * @return array<mixed>
     */
    public function jsonSerialize(): array
    {
        $result = [];
        $result['subtype'] = $this->subtype;

        $base = parent::jsonSerialize();
        $result = array_merge($base, $result);

        switch ($this->subtype) {
            case 'rectilinear':
                $value = $this->asRectilinear()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'geospatial':
                $value = $this->asGeospatial()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'unknown':
                $value = $this->asUnknown()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case '_unknown':
            default:
                if (is_null($this->value)) {
                    break;
                }
                if ($this->value instanceof JsonSerializableType) {
                    $value = $this->value->jsonSerialize();
                    $result = array_merge($value, $result);
                } elseif (is_array($this->value)) {
                    $result = array_merge($this->value, $result);
                }
        }

        return $result;
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function jsonDeserialize(array $data): static
    {
        $args = [];
        if (!array_key_exists('subtype', $data)) {
            throw new Exception(
                "JSON data is missing property 'subtype'",
            );
        }
        $subtype = $data['subtype'];
        if (!(is_string($subtype))) {
            throw new Exception(
                "Expected property 'subtype' in JSON data to be string, instead received " . get_debug_type($data['subtype']),
            );
        }

        $args['subtype'] = $subtype;
        switch ($subtype) {
            case 'rectilinear':
                $args['value'] = PdfMeasurementRectilinear::jsonDeserialize($data);
                break;
            case 'geospatial':
                $args['value'] = PdfMeasurementGeospatial::jsonDeserialize($data);
                break;
            case 'unknown':
                $args['value'] = PdfMeasurementUnknown::jsonDeserialize($data);
                break;
            case '_unknown':
            default:
                $args['subtype'] = '_unknown';
                $args['value'] = $data;
        }

        // @phpstan-ignore-next-line
        return new static($args);
    }
}
