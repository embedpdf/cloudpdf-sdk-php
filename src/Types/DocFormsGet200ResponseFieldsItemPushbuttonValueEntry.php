<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Exception;

class DocFormsGet200ResponseFieldsItemPushbuttonValueEntry extends JsonSerializableType
{
    /**
     * @var (
     *    'none'
     *   |'scalar'
     *   |'array'
     *   |'unsupported'
     *   |'_unknown'
     * ) $kind
     */
    public readonly string $kind;

    /**
     * @var (
     *    DocFormsGet200ResponseFieldsItemPushbuttonValueEntryNone
     *   |DocFormsGet200ResponseFieldsItemPushbuttonValueEntryScalar
     *   |DocFormsGet200ResponseFieldsItemPushbuttonValueEntryArray
     *   |DocFormsGet200ResponseFieldsItemPushbuttonValueEntryUnsupported
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   kind: (
     *    'none'
     *   |'scalar'
     *   |'array'
     *   |'unsupported'
     *   |'_unknown'
     * ),
     *   value: (
     *    DocFormsGet200ResponseFieldsItemPushbuttonValueEntryNone
     *   |DocFormsGet200ResponseFieldsItemPushbuttonValueEntryScalar
     *   |DocFormsGet200ResponseFieldsItemPushbuttonValueEntryArray
     *   |DocFormsGet200ResponseFieldsItemPushbuttonValueEntryUnsupported
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
     * @param DocFormsGet200ResponseFieldsItemPushbuttonValueEntryNone $none
     * @return DocFormsGet200ResponseFieldsItemPushbuttonValueEntry
     */
    public static function none(DocFormsGet200ResponseFieldsItemPushbuttonValueEntryNone $none): DocFormsGet200ResponseFieldsItemPushbuttonValueEntry
    {
        return new DocFormsGet200ResponseFieldsItemPushbuttonValueEntry([
            'kind' => 'none',
            'value' => $none,
        ]);
    }

    /**
     * @param DocFormsGet200ResponseFieldsItemPushbuttonValueEntryScalar $scalar
     * @return DocFormsGet200ResponseFieldsItemPushbuttonValueEntry
     */
    public static function scalar(DocFormsGet200ResponseFieldsItemPushbuttonValueEntryScalar $scalar): DocFormsGet200ResponseFieldsItemPushbuttonValueEntry
    {
        return new DocFormsGet200ResponseFieldsItemPushbuttonValueEntry([
            'kind' => 'scalar',
            'value' => $scalar,
        ]);
    }

    /**
     * @param DocFormsGet200ResponseFieldsItemPushbuttonValueEntryArray $array
     * @return DocFormsGet200ResponseFieldsItemPushbuttonValueEntry
     */
    public static function array(DocFormsGet200ResponseFieldsItemPushbuttonValueEntryArray $array): DocFormsGet200ResponseFieldsItemPushbuttonValueEntry
    {
        return new DocFormsGet200ResponseFieldsItemPushbuttonValueEntry([
            'kind' => 'array',
            'value' => $array,
        ]);
    }

    /**
     * @param DocFormsGet200ResponseFieldsItemPushbuttonValueEntryUnsupported $unsupported
     * @return DocFormsGet200ResponseFieldsItemPushbuttonValueEntry
     */
    public static function unsupported(DocFormsGet200ResponseFieldsItemPushbuttonValueEntryUnsupported $unsupported): DocFormsGet200ResponseFieldsItemPushbuttonValueEntry
    {
        return new DocFormsGet200ResponseFieldsItemPushbuttonValueEntry([
            'kind' => 'unsupported',
            'value' => $unsupported,
        ]);
    }

    /**
     * @return bool
     */
    public function isNone(): bool
    {
        return $this->value instanceof DocFormsGet200ResponseFieldsItemPushbuttonValueEntryNone && $this->kind === 'none';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemPushbuttonValueEntryNone
     */
    public function asNone(): DocFormsGet200ResponseFieldsItemPushbuttonValueEntryNone
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemPushbuttonValueEntryNone && $this->kind === 'none')) {
            throw new Exception(
                "Expected none; got " . $this->kind . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isScalar(): bool
    {
        return $this->value instanceof DocFormsGet200ResponseFieldsItemPushbuttonValueEntryScalar && $this->kind === 'scalar';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemPushbuttonValueEntryScalar
     */
    public function asScalar(): DocFormsGet200ResponseFieldsItemPushbuttonValueEntryScalar
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemPushbuttonValueEntryScalar && $this->kind === 'scalar')) {
            throw new Exception(
                "Expected scalar; got " . $this->kind . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isArray(): bool
    {
        return $this->value instanceof DocFormsGet200ResponseFieldsItemPushbuttonValueEntryArray && $this->kind === 'array';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemPushbuttonValueEntryArray
     */
    public function asArray(): DocFormsGet200ResponseFieldsItemPushbuttonValueEntryArray
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemPushbuttonValueEntryArray && $this->kind === 'array')) {
            throw new Exception(
                "Expected array; got " . $this->kind . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isUnsupported(): bool
    {
        return $this->value instanceof DocFormsGet200ResponseFieldsItemPushbuttonValueEntryUnsupported && $this->kind === 'unsupported';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemPushbuttonValueEntryUnsupported
     */
    public function asUnsupported(): DocFormsGet200ResponseFieldsItemPushbuttonValueEntryUnsupported
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemPushbuttonValueEntryUnsupported && $this->kind === 'unsupported')) {
            throw new Exception(
                "Expected unsupported; got " . $this->kind . " with value of type " . get_debug_type($this->value),
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
            case 'none':
                $value = $this->asNone()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'scalar':
                $value = $this->asScalar()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'array':
                $value = $this->asArray()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'unsupported':
                $value = $this->asUnsupported()->jsonSerialize();
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
            case 'none':
                $args['value'] = DocFormsGet200ResponseFieldsItemPushbuttonValueEntryNone::jsonDeserialize($data);
                break;
            case 'scalar':
                $args['value'] = DocFormsGet200ResponseFieldsItemPushbuttonValueEntryScalar::jsonDeserialize($data);
                break;
            case 'array':
                $args['value'] = DocFormsGet200ResponseFieldsItemPushbuttonValueEntryArray::jsonDeserialize($data);
                break;
            case 'unsupported':
                $args['value'] = DocFormsGet200ResponseFieldsItemPushbuttonValueEntryUnsupported::jsonDeserialize($data);
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
