<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class AnnotationPatchLineMeasureUnknown extends JsonSerializableType
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
     *    AnnotationPatchLineMeasureUnknownGeospatial
     *   |AnnotationPatchLineMeasureUnknownUnknown
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
     *    AnnotationPatchLineMeasureUnknownGeospatial
     *   |AnnotationPatchLineMeasureUnknownUnknown
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
     * @param AnnotationPatchLineMeasureUnknownGeospatial $geospatial
     * @return AnnotationPatchLineMeasureUnknown
     */
    public static function geospatial(AnnotationPatchLineMeasureUnknownGeospatial $geospatial): AnnotationPatchLineMeasureUnknown
    {
        return new AnnotationPatchLineMeasureUnknown([
            'subtype' => 'geospatial',
            'value' => $geospatial,
        ]);
    }

    /**
     * @param AnnotationPatchLineMeasureUnknownUnknown $unknown
     * @return AnnotationPatchLineMeasureUnknown
     */
    public static function unknown(AnnotationPatchLineMeasureUnknownUnknown $unknown): AnnotationPatchLineMeasureUnknown
    {
        return new AnnotationPatchLineMeasureUnknown([
            'subtype' => 'unknown',
            'value' => $unknown,
        ]);
    }

    /**
     * @return bool
     */
    public function isGeospatial(): bool
    {
        return $this->value instanceof AnnotationPatchLineMeasureUnknownGeospatial && $this->subtype === 'geospatial';
    }

    /**
     * @return AnnotationPatchLineMeasureUnknownGeospatial
     */
    public function asGeospatial(): AnnotationPatchLineMeasureUnknownGeospatial
    {
        if (!($this->value instanceof AnnotationPatchLineMeasureUnknownGeospatial && $this->subtype === 'geospatial')) {
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
        return $this->value instanceof AnnotationPatchLineMeasureUnknownUnknown && $this->subtype === 'unknown';
    }

    /**
     * @return AnnotationPatchLineMeasureUnknownUnknown
     */
    public function asUnknown(): AnnotationPatchLineMeasureUnknownUnknown
    {
        if (!($this->value instanceof AnnotationPatchLineMeasureUnknownUnknown && $this->subtype === 'unknown')) {
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
                $args['value'] = AnnotationPatchLineMeasureUnknownGeospatial::jsonDeserialize($data);
                break;
            case 'unknown':
                $args['value'] = AnnotationPatchLineMeasureUnknownUnknown::jsonDeserialize($data);
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
