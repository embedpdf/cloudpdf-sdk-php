<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class AnnotationPolylineMeasure extends JsonSerializableType
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
     *    AnnotationPolylineMeasureRectilinear
     *   |AnnotationPolylineMeasureGeospatial
     *   |AnnotationPolylineMeasureUnknown
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
     *    AnnotationPolylineMeasureRectilinear
     *   |AnnotationPolylineMeasureGeospatial
     *   |AnnotationPolylineMeasureUnknown
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
     * @param AnnotationPolylineMeasureRectilinear $rectilinear
     * @return AnnotationPolylineMeasure
     */
    public static function rectilinear(AnnotationPolylineMeasureRectilinear $rectilinear): AnnotationPolylineMeasure
    {
        return new AnnotationPolylineMeasure([
            'subtype' => 'rectilinear',
            'value' => $rectilinear,
        ]);
    }

    /**
     * @param AnnotationPolylineMeasureGeospatial $geospatial
     * @return AnnotationPolylineMeasure
     */
    public static function geospatial(AnnotationPolylineMeasureGeospatial $geospatial): AnnotationPolylineMeasure
    {
        return new AnnotationPolylineMeasure([
            'subtype' => 'geospatial',
            'value' => $geospatial,
        ]);
    }

    /**
     * @param AnnotationPolylineMeasureUnknown $unknown
     * @return AnnotationPolylineMeasure
     */
    public static function unknown(AnnotationPolylineMeasureUnknown $unknown): AnnotationPolylineMeasure
    {
        return new AnnotationPolylineMeasure([
            'subtype' => 'unknown',
            'value' => $unknown,
        ]);
    }

    /**
     * @return bool
     */
    public function isRectilinear(): bool
    {
        return $this->value instanceof AnnotationPolylineMeasureRectilinear && $this->subtype === 'rectilinear';
    }

    /**
     * @return AnnotationPolylineMeasureRectilinear
     */
    public function asRectilinear(): AnnotationPolylineMeasureRectilinear
    {
        if (!($this->value instanceof AnnotationPolylineMeasureRectilinear && $this->subtype === 'rectilinear')) {
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
        return $this->value instanceof AnnotationPolylineMeasureGeospatial && $this->subtype === 'geospatial';
    }

    /**
     * @return AnnotationPolylineMeasureGeospatial
     */
    public function asGeospatial(): AnnotationPolylineMeasureGeospatial
    {
        if (!($this->value instanceof AnnotationPolylineMeasureGeospatial && $this->subtype === 'geospatial')) {
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
        return $this->value instanceof AnnotationPolylineMeasureUnknown && $this->subtype === 'unknown';
    }

    /**
     * @return AnnotationPolylineMeasureUnknown
     */
    public function asUnknown(): AnnotationPolylineMeasureUnknown
    {
        if (!($this->value instanceof AnnotationPolylineMeasureUnknown && $this->subtype === 'unknown')) {
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
                $args['value'] = AnnotationPolylineMeasureRectilinear::jsonDeserialize($data);
                break;
            case 'geospatial':
                $args['value'] = AnnotationPolylineMeasureGeospatial::jsonDeserialize($data);
                break;
            case 'unknown':
                $args['value'] = AnnotationPolylineMeasureUnknown::jsonDeserialize($data);
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
