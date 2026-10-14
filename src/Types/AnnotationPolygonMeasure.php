<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class AnnotationPolygonMeasure extends JsonSerializableType
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
     *    AnnotationPolygonMeasureRectilinear
     *   |AnnotationPolygonMeasureGeospatial
     *   |AnnotationPolygonMeasureUnknown
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
     *    AnnotationPolygonMeasureRectilinear
     *   |AnnotationPolygonMeasureGeospatial
     *   |AnnotationPolygonMeasureUnknown
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
     * @param AnnotationPolygonMeasureRectilinear $rectilinear
     * @return AnnotationPolygonMeasure
     */
    public static function rectilinear(AnnotationPolygonMeasureRectilinear $rectilinear): AnnotationPolygonMeasure
    {
        return new AnnotationPolygonMeasure([
            'subtype' => 'rectilinear',
            'value' => $rectilinear,
        ]);
    }

    /**
     * @param AnnotationPolygonMeasureGeospatial $geospatial
     * @return AnnotationPolygonMeasure
     */
    public static function geospatial(AnnotationPolygonMeasureGeospatial $geospatial): AnnotationPolygonMeasure
    {
        return new AnnotationPolygonMeasure([
            'subtype' => 'geospatial',
            'value' => $geospatial,
        ]);
    }

    /**
     * @param AnnotationPolygonMeasureUnknown $unknown
     * @return AnnotationPolygonMeasure
     */
    public static function unknown(AnnotationPolygonMeasureUnknown $unknown): AnnotationPolygonMeasure
    {
        return new AnnotationPolygonMeasure([
            'subtype' => 'unknown',
            'value' => $unknown,
        ]);
    }

    /**
     * @return bool
     */
    public function isRectilinear(): bool
    {
        return $this->value instanceof AnnotationPolygonMeasureRectilinear && $this->subtype === 'rectilinear';
    }

    /**
     * @return AnnotationPolygonMeasureRectilinear
     */
    public function asRectilinear(): AnnotationPolygonMeasureRectilinear
    {
        if (!($this->value instanceof AnnotationPolygonMeasureRectilinear && $this->subtype === 'rectilinear')) {
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
        return $this->value instanceof AnnotationPolygonMeasureGeospatial && $this->subtype === 'geospatial';
    }

    /**
     * @return AnnotationPolygonMeasureGeospatial
     */
    public function asGeospatial(): AnnotationPolygonMeasureGeospatial
    {
        if (!($this->value instanceof AnnotationPolygonMeasureGeospatial && $this->subtype === 'geospatial')) {
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
        return $this->value instanceof AnnotationPolygonMeasureUnknown && $this->subtype === 'unknown';
    }

    /**
     * @return AnnotationPolygonMeasureUnknown
     */
    public function asUnknown(): AnnotationPolygonMeasureUnknown
    {
        if (!($this->value instanceof AnnotationPolygonMeasureUnknown && $this->subtype === 'unknown')) {
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
                $args['value'] = AnnotationPolygonMeasureRectilinear::jsonDeserialize($data);
                break;
            case 'geospatial':
                $args['value'] = AnnotationPolygonMeasureGeospatial::jsonDeserialize($data);
                break;
            case 'unknown':
                $args['value'] = AnnotationPolygonMeasureUnknown::jsonDeserialize($data);
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
