<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class DocAnnotationsList200ResponseAnnotationsItemLineMeasure extends JsonSerializableType
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
     *    DocAnnotationsList200ResponseAnnotationsItemLineMeasureRl
     *   |DocAnnotationsList200ResponseAnnotationsItemLineMeasureGeo
     *   |DocAnnotationsList200ResponseAnnotationsItemLineMeasureUnknown
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
     *    DocAnnotationsList200ResponseAnnotationsItemLineMeasureRl
     *   |DocAnnotationsList200ResponseAnnotationsItemLineMeasureGeo
     *   |DocAnnotationsList200ResponseAnnotationsItemLineMeasureUnknown
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
     * @param DocAnnotationsList200ResponseAnnotationsItemLineMeasureRl $rl
     * @return DocAnnotationsList200ResponseAnnotationsItemLineMeasure
     */
    public static function rl(DocAnnotationsList200ResponseAnnotationsItemLineMeasureRl $rl): DocAnnotationsList200ResponseAnnotationsItemLineMeasure
    {
        return new DocAnnotationsList200ResponseAnnotationsItemLineMeasure([
            'subtype' => 'RL',
            'value' => $rl,
        ]);
    }

    /**
     * @param DocAnnotationsList200ResponseAnnotationsItemLineMeasureGeo $geo
     * @return DocAnnotationsList200ResponseAnnotationsItemLineMeasure
     */
    public static function geo(DocAnnotationsList200ResponseAnnotationsItemLineMeasureGeo $geo): DocAnnotationsList200ResponseAnnotationsItemLineMeasure
    {
        return new DocAnnotationsList200ResponseAnnotationsItemLineMeasure([
            'subtype' => 'GEO',
            'value' => $geo,
        ]);
    }

    /**
     * @param DocAnnotationsList200ResponseAnnotationsItemLineMeasureUnknown $unknown
     * @return DocAnnotationsList200ResponseAnnotationsItemLineMeasure
     */
    public static function unknown(DocAnnotationsList200ResponseAnnotationsItemLineMeasureUnknown $unknown): DocAnnotationsList200ResponseAnnotationsItemLineMeasure
    {
        return new DocAnnotationsList200ResponseAnnotationsItemLineMeasure([
            'subtype' => 'unknown',
            'value' => $unknown,
        ]);
    }

    /**
     * @return bool
     */
    public function isRl(): bool
    {
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemLineMeasureRl && $this->subtype === 'RL';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemLineMeasureRl
     */
    public function asRl(): DocAnnotationsList200ResponseAnnotationsItemLineMeasureRl
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemLineMeasureRl && $this->subtype === 'RL')) {
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
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemLineMeasureGeo && $this->subtype === 'GEO';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemLineMeasureGeo
     */
    public function asGeo(): DocAnnotationsList200ResponseAnnotationsItemLineMeasureGeo
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemLineMeasureGeo && $this->subtype === 'GEO')) {
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
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemLineMeasureUnknown && $this->subtype === 'unknown';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemLineMeasureUnknown
     */
    public function asUnknown(): DocAnnotationsList200ResponseAnnotationsItemLineMeasureUnknown
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemLineMeasureUnknown && $this->subtype === 'unknown')) {
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
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemLineMeasureRl::jsonDeserialize($data);
                break;
            case 'GEO':
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemLineMeasureGeo::jsonDeserialize($data);
                break;
            case 'unknown':
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemLineMeasureUnknown::jsonDeserialize($data);
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
