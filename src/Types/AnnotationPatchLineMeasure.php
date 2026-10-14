<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class AnnotationPatchLineMeasure extends JsonSerializableType
{
    /**
     * @var (
     *    'rectilinear'
     *   |'unknown'
     *   |'_unknown'
     * ) $subtype
     */
    public readonly string $subtype;

    /**
     * @var (
     *    AnnotationPatchLineMeasureRectilinear
     *   |AnnotationPatchLineMeasureUnknown
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   subtype: (
     *    'rectilinear'
     *   |'unknown'
     *   |'_unknown'
     * ),
     *   value: (
     *    AnnotationPatchLineMeasureRectilinear
     *   |AnnotationPatchLineMeasureUnknown
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
     * @param AnnotationPatchLineMeasureRectilinear $rectilinear
     * @return AnnotationPatchLineMeasure
     */
    public static function rectilinear(AnnotationPatchLineMeasureRectilinear $rectilinear): AnnotationPatchLineMeasure
    {
        return new AnnotationPatchLineMeasure([
            'subtype' => 'rectilinear',
            'value' => $rectilinear,
        ]);
    }

    /**
     * @param AnnotationPatchLineMeasureUnknown $unknown
     * @return AnnotationPatchLineMeasure
     */
    public static function unknown(AnnotationPatchLineMeasureUnknown $unknown): AnnotationPatchLineMeasure
    {
        return new AnnotationPatchLineMeasure([
            'subtype' => 'unknown',
            'value' => $unknown,
        ]);
    }

    /**
     * @return bool
     */
    public function isRectilinear(): bool
    {
        return $this->value instanceof AnnotationPatchLineMeasureRectilinear && $this->subtype === 'rectilinear';
    }

    /**
     * @return AnnotationPatchLineMeasureRectilinear
     */
    public function asRectilinear(): AnnotationPatchLineMeasureRectilinear
    {
        if (!($this->value instanceof AnnotationPatchLineMeasureRectilinear && $this->subtype === 'rectilinear')) {
            throw new Exception(
                "Expected rectilinear; got " . $this->subtype . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isUnknown(): bool
    {
        return $this->value instanceof AnnotationPatchLineMeasureUnknown && $this->subtype === 'unknown';
    }

    /**
     * @return AnnotationPatchLineMeasureUnknown
     */
    public function asUnknown(): AnnotationPatchLineMeasureUnknown
    {
        if (!($this->value instanceof AnnotationPatchLineMeasureUnknown && $this->subtype === 'unknown')) {
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
            case 'unknown':
                $value = $this->asUnknown()->jsonSerialize();
                $result['unknown'] = $value;
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
                $args['value'] = AnnotationPatchLineMeasureRectilinear::jsonDeserialize($data);
                break;
            case 'unknown':
                if (!array_key_exists('unknown', $data)) {
                    throw new Exception(
                        "JSON data is missing property 'unknown'",
                    );
                }

                if (!(is_array($data['unknown']))) {
                    throw new Exception(
                        "Expected property 'unknown' in JSON data to be array, instead received " . get_debug_type($data['unknown']),
                    );
                }
                $args['value'] = AnnotationPatchLineMeasureUnknown::jsonDeserialize($data['unknown']);
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
