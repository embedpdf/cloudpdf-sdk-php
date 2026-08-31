<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonInReplyTo extends JsonSerializableType
{
    /**
     * @var (
     *    'objectNumber'
     *   |'nm'
     *   |'index'
     *   |'_unknown'
     * ) $kind
     */
    public readonly string $kind;

    /**
     * @var (
     *    DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonInReplyToObjectNumber
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonInReplyToNm
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonInReplyToIndex
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   kind: (
     *    'objectNumber'
     *   |'nm'
     *   |'index'
     *   |'_unknown'
     * ),
     *   value: (
     *    DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonInReplyToObjectNumber
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonInReplyToNm
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonInReplyToIndex
     *   |mixed
     * ),
     * } $values
     */
    private function __construct(
        array $values,
    ) {
        $this->kind = $values['kind'];
        $this->value = $values['value'];
    }

    /**
     * @param DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonInReplyToObjectNumber $objectNumber
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonInReplyTo
     */
    public static function objectNumber(DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonInReplyToObjectNumber $objectNumber): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonInReplyTo
    {
        return new DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonInReplyTo([
            'kind' => 'objectNumber',
            'value' => $objectNumber,
        ]);
    }

    /**
     * @param DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonInReplyToNm $nm
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonInReplyTo
     */
    public static function nm(DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonInReplyToNm $nm): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonInReplyTo
    {
        return new DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonInReplyTo([
            'kind' => 'nm',
            'value' => $nm,
        ]);
    }

    /**
     * @param DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonInReplyToIndex $index
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonInReplyTo
     */
    public static function index(DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonInReplyToIndex $index): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonInReplyTo
    {
        return new DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonInReplyTo([
            'kind' => 'index',
            'value' => $index,
        ]);
    }

    /**
     * @return bool
     */
    public function isObjectNumber(): bool
    {
        return $this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonInReplyToObjectNumber && $this->kind === 'objectNumber';
    }

    /**
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonInReplyToObjectNumber
     */
    public function asObjectNumber(): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonInReplyToObjectNumber
    {
        if (!($this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonInReplyToObjectNumber && $this->kind === 'objectNumber')) {
            throw new Exception(
                "Expected objectNumber; got " . $this->kind . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isNm(): bool
    {
        return $this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonInReplyToNm && $this->kind === 'nm';
    }

    /**
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonInReplyToNm
     */
    public function asNm(): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonInReplyToNm
    {
        if (!($this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonInReplyToNm && $this->kind === 'nm')) {
            throw new Exception(
                "Expected nm; got " . $this->kind . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isIndex(): bool
    {
        return $this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonInReplyToIndex && $this->kind === 'index';
    }

    /**
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonInReplyToIndex
     */
    public function asIndex(): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonInReplyToIndex
    {
        if (!($this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonInReplyToIndex && $this->kind === 'index')) {
            throw new Exception(
                "Expected index; got " . $this->kind . " with value of type " . get_debug_type($this->value),
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
        $result['kind'] = $this->kind;

        $base = parent::jsonSerialize();
        $result = array_merge($base, $result);

        switch ($this->kind) {
            case 'objectNumber':
                $value = $this->asObjectNumber()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'nm':
                $value = $this->asNm()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'index':
                $value = $this->asIndex()->jsonSerialize();
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
        if (!array_key_exists('kind', $data)) {
            throw new Exception(
                "JSON data is missing property 'kind'",
            );
        }
        $kind = $data['kind'];
        if (!(is_string($kind))) {
            throw new Exception(
                "Expected property 'kind' in JSON data to be string, instead received " . get_debug_type($data['kind']),
            );
        }

        $args['kind'] = $kind;
        switch ($kind) {
            case 'objectNumber':
                $args['value'] = DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonInReplyToObjectNumber::jsonDeserialize($data);
                break;
            case 'nm':
                $args['value'] = DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonInReplyToNm::jsonDeserialize($data);
                break;
            case 'index':
                $args['value'] = DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonInReplyToIndex::jsonDeserialize($data);
                break;
            case '_unknown':
            default:
                $args['kind'] = '_unknown';
                $args['value'] = $data;
        }

        // @phpstan-ignore-next-line
        return new static($args);
    }
}
