<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class DocAnnotationsList200ResponseAnnotationsItemPolylineMeasure extends JsonSerializableType
{
    /**
     * @var (
     *    'RL'
     *   |'GEO'
     *   |'unknown'
     *   |'_unknown'
     * ) $subtype
     */
    public readonly string $subtype;

    /**
     * @var (
     *    DocAnnotationsList200ResponseAnnotationsItemPolylineMeasureRl
     *   |DocAnnotationsList200ResponseAnnotationsItemPolylineMeasureGeo
     *   |DocAnnotationsList200ResponseAnnotationsItemPolylineMeasureUnknown
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   subtype: (
     *    'RL'
     *   |'GEO'
     *   |'unknown'
     *   |'_unknown'
     * ),
     *   value: (
     *    DocAnnotationsList200ResponseAnnotationsItemPolylineMeasureRl
     *   |DocAnnotationsList200ResponseAnnotationsItemPolylineMeasureGeo
     *   |DocAnnotationsList200ResponseAnnotationsItemPolylineMeasureUnknown
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
     * @param DocAnnotationsList200ResponseAnnotationsItemPolylineMeasureRl $rl
     * @return DocAnnotationsList200ResponseAnnotationsItemPolylineMeasure
     */
    public static function rl(DocAnnotationsList200ResponseAnnotationsItemPolylineMeasureRl $rl): DocAnnotationsList200ResponseAnnotationsItemPolylineMeasure
    {
        return new DocAnnotationsList200ResponseAnnotationsItemPolylineMeasure([
            'subtype' => 'RL',
            'value' => $rl,
        ]);
    }

    /**
     * @param DocAnnotationsList200ResponseAnnotationsItemPolylineMeasureGeo $geo
     * @return DocAnnotationsList200ResponseAnnotationsItemPolylineMeasure
     */
    public static function geo(DocAnnotationsList200ResponseAnnotationsItemPolylineMeasureGeo $geo): DocAnnotationsList200ResponseAnnotationsItemPolylineMeasure
    {
        return new DocAnnotationsList200ResponseAnnotationsItemPolylineMeasure([
            'subtype' => 'GEO',
            'value' => $geo,
        ]);
    }

    /**
     * @param DocAnnotationsList200ResponseAnnotationsItemPolylineMeasureUnknown $unknown
     * @return DocAnnotationsList200ResponseAnnotationsItemPolylineMeasure
     */
    public static function unknown(DocAnnotationsList200ResponseAnnotationsItemPolylineMeasureUnknown $unknown): DocAnnotationsList200ResponseAnnotationsItemPolylineMeasure
    {
        return new DocAnnotationsList200ResponseAnnotationsItemPolylineMeasure([
            'subtype' => 'unknown',
            'value' => $unknown,
        ]);
    }

    /**
     * @return bool
     */
    public function isRl(): bool
    {
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemPolylineMeasureRl && $this->subtype === 'RL';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemPolylineMeasureRl
     */
    public function asRl(): DocAnnotationsList200ResponseAnnotationsItemPolylineMeasureRl
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemPolylineMeasureRl && $this->subtype === 'RL')) {
            throw new Exception(
                "Expected RL; got " . $this->subtype . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isGeo(): bool
    {
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemPolylineMeasureGeo && $this->subtype === 'GEO';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemPolylineMeasureGeo
     */
    public function asGeo(): DocAnnotationsList200ResponseAnnotationsItemPolylineMeasureGeo
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemPolylineMeasureGeo && $this->subtype === 'GEO')) {
            throw new Exception(
                "Expected GEO; got " . $this->subtype . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isUnknown(): bool
    {
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemPolylineMeasureUnknown && $this->subtype === 'unknown';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemPolylineMeasureUnknown
     */
    public function asUnknown(): DocAnnotationsList200ResponseAnnotationsItemPolylineMeasureUnknown
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemPolylineMeasureUnknown && $this->subtype === 'unknown')) {
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
            case 'RL':
                $value = $this->asRl()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'GEO':
                $value = $this->asGeo()->jsonSerialize();
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
            case 'RL':
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemPolylineMeasureRl::jsonDeserialize($data);
                break;
            case 'GEO':
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemPolylineMeasureGeo::jsonDeserialize($data);
                break;
            case 'unknown':
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemPolylineMeasureUnknown::jsonDeserialize($data);
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
