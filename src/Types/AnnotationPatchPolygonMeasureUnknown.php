<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class AnnotationPatchPolygonMeasureUnknown extends JsonSerializableType
{
    /**
     * @var (
     *    'geospatial'
     *   |'unknown'
     *   |'_unknown'
     * ) $subtype
     */
    public readonly string $subtype;

    /**
     * @var (
     *    AnnotationPatchPolygonMeasureUnknownGeospatial
     *   |AnnotationPatchPolygonMeasureUnknownUnknown
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   subtype: (
     *    'geospatial'
     *   |'unknown'
     *   |'_unknown'
     * ),
     *   value: (
     *    AnnotationPatchPolygonMeasureUnknownGeospatial
     *   |AnnotationPatchPolygonMeasureUnknownUnknown
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
     * @param AnnotationPatchPolygonMeasureUnknownGeospatial $geospatial
     * @return AnnotationPatchPolygonMeasureUnknown
     */
    public static function geospatial(AnnotationPatchPolygonMeasureUnknownGeospatial $geospatial): AnnotationPatchPolygonMeasureUnknown
    {
        return new AnnotationPatchPolygonMeasureUnknown([
            'subtype' => 'geospatial',
            'value' => $geospatial,
        ]);
    }

    /**
     * @param AnnotationPatchPolygonMeasureUnknownUnknown $unknown
     * @return AnnotationPatchPolygonMeasureUnknown
     */
    public static function unknown(AnnotationPatchPolygonMeasureUnknownUnknown $unknown): AnnotationPatchPolygonMeasureUnknown
    {
        return new AnnotationPatchPolygonMeasureUnknown([
            'subtype' => 'unknown',
            'value' => $unknown,
        ]);
    }

    /**
     * @return bool
     */
    public function isGeospatial(): bool
    {
        return $this->value instanceof AnnotationPatchPolygonMeasureUnknownGeospatial && $this->subtype === 'geospatial';
    }

    /**
     * @return AnnotationPatchPolygonMeasureUnknownGeospatial
     */
    public function asGeospatial(): AnnotationPatchPolygonMeasureUnknownGeospatial
    {
        if (!($this->value instanceof AnnotationPatchPolygonMeasureUnknownGeospatial && $this->subtype === 'geospatial')) {
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
        return $this->value instanceof AnnotationPatchPolygonMeasureUnknownUnknown && $this->subtype === 'unknown';
    }

    /**
     * @return AnnotationPatchPolygonMeasureUnknownUnknown
     */
    public function asUnknown(): AnnotationPatchPolygonMeasureUnknownUnknown
    {
        if (!($this->value instanceof AnnotationPatchPolygonMeasureUnknownUnknown && $this->subtype === 'unknown')) {
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
            case 'geospatial':
                $args['value'] = AnnotationPatchPolygonMeasureUnknownGeospatial::jsonDeserialize($data);
                break;
            case 'unknown':
                $args['value'] = AnnotationPatchPolygonMeasureUnknownUnknown::jsonDeserialize($data);
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
