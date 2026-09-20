<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasure extends JsonSerializableType
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
     *    DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureRl
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureGeo
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureUnknown
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
     *    DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureRl
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureGeo
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureUnknown
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
     * @param DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureRl $rl
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasure
     */
    public static function rl(DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureRl $rl): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasure
    {
        return new DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasure([
            'subtype' => 'RL',
            'value' => $rl,
        ]);
    }

    /**
     * @param DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureGeo $geo
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasure
     */
    public static function geo(DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureGeo $geo): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasure
    {
        return new DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasure([
            'subtype' => 'GEO',
            'value' => $geo,
        ]);
    }

    /**
     * @param DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureUnknown $unknown
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasure
     */
    public static function unknown(DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureUnknown $unknown): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasure
    {
        return new DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasure([
            'subtype' => 'unknown',
            'value' => $unknown,
        ]);
    }

    /**
     * @return bool
     */
    public function isRl(): bool
    {
        return $this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureRl && $this->subtype === 'RL';
    }

    /**
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureRl
     */
    public function asRl(): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureRl
    {
        if (!($this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureRl && $this->subtype === 'RL')) {
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
        return $this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureGeo && $this->subtype === 'GEO';
    }

    /**
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureGeo
     */
    public function asGeo(): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureGeo
    {
        if (!($this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureGeo && $this->subtype === 'GEO')) {
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
        return $this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureUnknown && $this->subtype === 'unknown';
    }

    /**
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureUnknown
     */
    public function asUnknown(): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureUnknown
    {
        if (!($this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureUnknown && $this->subtype === 'unknown')) {
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
                $args['value'] = DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureRl::jsonDeserialize($data);
                break;
            case 'GEO':
                $args['value'] = DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureGeo::jsonDeserialize($data);
                break;
            case 'unknown':
                $args['value'] = DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureUnknown::jsonDeserialize($data);
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
