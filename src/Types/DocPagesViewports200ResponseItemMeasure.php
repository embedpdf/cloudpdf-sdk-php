<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class DocPagesViewports200ResponseItemMeasure extends JsonSerializableType
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
     *    DocPagesViewports200ResponseItemMeasureRl
     *   |DocPagesViewports200ResponseItemMeasureGeo
     *   |DocPagesViewports200ResponseItemMeasureUnknown
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
     *    DocPagesViewports200ResponseItemMeasureRl
     *   |DocPagesViewports200ResponseItemMeasureGeo
     *   |DocPagesViewports200ResponseItemMeasureUnknown
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
     * @param DocPagesViewports200ResponseItemMeasureRl $rl
     * @return DocPagesViewports200ResponseItemMeasure
     */
    public static function rl(DocPagesViewports200ResponseItemMeasureRl $rl): DocPagesViewports200ResponseItemMeasure
    {
        return new DocPagesViewports200ResponseItemMeasure([
            'subtype' => 'RL',
            'value' => $rl,
        ]);
    }

    /**
     * @param DocPagesViewports200ResponseItemMeasureGeo $geo
     * @return DocPagesViewports200ResponseItemMeasure
     */
    public static function geo(DocPagesViewports200ResponseItemMeasureGeo $geo): DocPagesViewports200ResponseItemMeasure
    {
        return new DocPagesViewports200ResponseItemMeasure([
            'subtype' => 'GEO',
            'value' => $geo,
        ]);
    }

    /**
     * @param DocPagesViewports200ResponseItemMeasureUnknown $unknown
     * @return DocPagesViewports200ResponseItemMeasure
     */
    public static function unknown(DocPagesViewports200ResponseItemMeasureUnknown $unknown): DocPagesViewports200ResponseItemMeasure
    {
        return new DocPagesViewports200ResponseItemMeasure([
            'subtype' => 'unknown',
            'value' => $unknown,
        ]);
    }

    /**
     * @return bool
     */
    public function isRl(): bool
    {
        return $this->value instanceof DocPagesViewports200ResponseItemMeasureRl && $this->subtype === 'RL';
    }

    /**
     * @return DocPagesViewports200ResponseItemMeasureRl
     */
    public function asRl(): DocPagesViewports200ResponseItemMeasureRl
    {
        if (!($this->value instanceof DocPagesViewports200ResponseItemMeasureRl && $this->subtype === 'RL')) {
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
        return $this->value instanceof DocPagesViewports200ResponseItemMeasureGeo && $this->subtype === 'GEO';
    }

    /**
     * @return DocPagesViewports200ResponseItemMeasureGeo
     */
    public function asGeo(): DocPagesViewports200ResponseItemMeasureGeo
    {
        if (!($this->value instanceof DocPagesViewports200ResponseItemMeasureGeo && $this->subtype === 'GEO')) {
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
        return $this->value instanceof DocPagesViewports200ResponseItemMeasureUnknown && $this->subtype === 'unknown';
    }

    /**
     * @return DocPagesViewports200ResponseItemMeasureUnknown
     */
    public function asUnknown(): DocPagesViewports200ResponseItemMeasureUnknown
    {
        if (!($this->value instanceof DocPagesViewports200ResponseItemMeasureUnknown && $this->subtype === 'unknown')) {
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
                $args['value'] = DocPagesViewports200ResponseItemMeasureRl::jsonDeserialize($data);
                break;
            case 'GEO':
                $args['value'] = DocPagesViewports200ResponseItemMeasureGeo::jsonDeserialize($data);
                break;
            case 'unknown':
                $args['value'] = DocPagesViewports200ResponseItemMeasureUnknown::jsonDeserialize($data);
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
