<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class DocPagesViewports200ResponseViewportsItemMeasure extends JsonSerializableType
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
     *    DocPagesViewports200ResponseViewportsItemMeasureRectilinear
     *   |DocPagesViewports200ResponseViewportsItemMeasureGeospatial
     *   |DocPagesViewports200ResponseViewportsItemMeasureUnknown
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
     *    DocPagesViewports200ResponseViewportsItemMeasureRectilinear
     *   |DocPagesViewports200ResponseViewportsItemMeasureGeospatial
     *   |DocPagesViewports200ResponseViewportsItemMeasureUnknown
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
     * @param DocPagesViewports200ResponseViewportsItemMeasureRectilinear $rectilinear
     * @return DocPagesViewports200ResponseViewportsItemMeasure
     */
    public static function rectilinear(DocPagesViewports200ResponseViewportsItemMeasureRectilinear $rectilinear): DocPagesViewports200ResponseViewportsItemMeasure
    {
        return new DocPagesViewports200ResponseViewportsItemMeasure([
            'subtype' => 'rectilinear',
            'value' => $rectilinear,
        ]);
    }

    /**
     * @param DocPagesViewports200ResponseViewportsItemMeasureGeospatial $geospatial
     * @return DocPagesViewports200ResponseViewportsItemMeasure
     */
    public static function geospatial(DocPagesViewports200ResponseViewportsItemMeasureGeospatial $geospatial): DocPagesViewports200ResponseViewportsItemMeasure
    {
        return new DocPagesViewports200ResponseViewportsItemMeasure([
            'subtype' => 'geospatial',
            'value' => $geospatial,
        ]);
    }

    /**
     * @param DocPagesViewports200ResponseViewportsItemMeasureUnknown $unknown
     * @return DocPagesViewports200ResponseViewportsItemMeasure
     */
    public static function unknown(DocPagesViewports200ResponseViewportsItemMeasureUnknown $unknown): DocPagesViewports200ResponseViewportsItemMeasure
    {
        return new DocPagesViewports200ResponseViewportsItemMeasure([
            'subtype' => 'unknown',
            'value' => $unknown,
        ]);
    }

    /**
     * @return bool
     */
    public function isRectilinear(): bool
    {
        return $this->value instanceof DocPagesViewports200ResponseViewportsItemMeasureRectilinear && $this->subtype === 'rectilinear';
    }

    /**
     * @return DocPagesViewports200ResponseViewportsItemMeasureRectilinear
     */
    public function asRectilinear(): DocPagesViewports200ResponseViewportsItemMeasureRectilinear
    {
        if (!($this->value instanceof DocPagesViewports200ResponseViewportsItemMeasureRectilinear && $this->subtype === 'rectilinear')) {
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
        return $this->value instanceof DocPagesViewports200ResponseViewportsItemMeasureGeospatial && $this->subtype === 'geospatial';
    }

    /**
     * @return DocPagesViewports200ResponseViewportsItemMeasureGeospatial
     */
    public function asGeospatial(): DocPagesViewports200ResponseViewportsItemMeasureGeospatial
    {
        if (!($this->value instanceof DocPagesViewports200ResponseViewportsItemMeasureGeospatial && $this->subtype === 'geospatial')) {
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
        return $this->value instanceof DocPagesViewports200ResponseViewportsItemMeasureUnknown && $this->subtype === 'unknown';
    }

    /**
     * @return DocPagesViewports200ResponseViewportsItemMeasureUnknown
     */
    public function asUnknown(): DocPagesViewports200ResponseViewportsItemMeasureUnknown
    {
        if (!($this->value instanceof DocPagesViewports200ResponseViewportsItemMeasureUnknown && $this->subtype === 'unknown')) {
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
                $args['value'] = DocPagesViewports200ResponseViewportsItemMeasureRectilinear::jsonDeserialize($data);
                break;
            case 'geospatial':
                $args['value'] = DocPagesViewports200ResponseViewportsItemMeasureGeospatial::jsonDeserialize($data);
                break;
            case 'unknown':
                $args['value'] = DocPagesViewports200ResponseViewportsItemMeasureUnknown::jsonDeserialize($data);
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
