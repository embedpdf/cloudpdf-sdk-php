<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasure extends JsonSerializableType
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
     *    DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasureRl
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasureGeo
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasureUnknown
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
     *    DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasureRl
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasureGeo
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasureUnknown
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
     * @param DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasureRl $rl
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasure
     */
    public static function rl(DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasureRl $rl): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasure
    {
        return new DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasure([
            'subtype' => 'RL',
            'value' => $rl,
        ]);
    }

    /**
     * @param DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasureGeo $geo
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasure
     */
    public static function geo(DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasureGeo $geo): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasure
    {
        return new DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasure([
            'subtype' => 'GEO',
            'value' => $geo,
        ]);
    }

    /**
     * @param DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasureUnknown $unknown
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasure
     */
    public static function unknown(DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasureUnknown $unknown): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasure
    {
        return new DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasure([
            'subtype' => 'unknown',
            'value' => $unknown,
        ]);
    }

    /**
     * @return bool
     */
    public function isRl(): bool
    {
        return $this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasureRl && $this->subtype === 'RL';
    }

    /**
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasureRl
     */
    public function asRl(): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasureRl
    {
        if (!($this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasureRl && $this->subtype === 'RL')) {
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
        return $this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasureGeo && $this->subtype === 'GEO';
    }

    /**
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasureGeo
     */
    public function asGeo(): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasureGeo
    {
        if (!($this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasureGeo && $this->subtype === 'GEO')) {
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
        return $this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasureUnknown && $this->subtype === 'unknown';
    }

    /**
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasureUnknown
     */
    public function asUnknown(): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasureUnknown
    {
        if (!($this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasureUnknown && $this->subtype === 'unknown')) {
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
                $args['value'] = DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasureRl::jsonDeserialize($data);
                break;
            case 'GEO':
                $args['value'] = DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasureGeo::jsonDeserialize($data);
                break;
            case 'unknown':
                $args['value'] = DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasureUnknown::jsonDeserialize($data);
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
