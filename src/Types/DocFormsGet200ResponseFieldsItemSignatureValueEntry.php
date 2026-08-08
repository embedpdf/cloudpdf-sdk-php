<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Exception;

class DocFormsGet200ResponseFieldsItemSignatureValueEntry extends JsonSerializableType
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
     *    DocFormsGet200ResponseFieldsItemSignatureValueEntryNone
     *   |DocFormsGet200ResponseFieldsItemSignatureValueEntryScalar
     *   |DocFormsGet200ResponseFieldsItemSignatureValueEntryArray
     *   |DocFormsGet200ResponseFieldsItemSignatureValueEntryUnsupported
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
     *    DocFormsGet200ResponseFieldsItemSignatureValueEntryNone
     *   |DocFormsGet200ResponseFieldsItemSignatureValueEntryScalar
     *   |DocFormsGet200ResponseFieldsItemSignatureValueEntryArray
     *   |DocFormsGet200ResponseFieldsItemSignatureValueEntryUnsupported
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
     * @param DocFormsGet200ResponseFieldsItemSignatureValueEntryNone $none
     * @return DocFormsGet200ResponseFieldsItemSignatureValueEntry
     */
    public static function none(DocFormsGet200ResponseFieldsItemSignatureValueEntryNone $none): DocFormsGet200ResponseFieldsItemSignatureValueEntry
    {
        return new DocFormsGet200ResponseFieldsItemSignatureValueEntry([
            'kind' => 'none',
            'value' => $none,
        ]);
    }

    /**
     * @param DocFormsGet200ResponseFieldsItemSignatureValueEntryScalar $scalar
     * @return DocFormsGet200ResponseFieldsItemSignatureValueEntry
     */
    public static function scalar(DocFormsGet200ResponseFieldsItemSignatureValueEntryScalar $scalar): DocFormsGet200ResponseFieldsItemSignatureValueEntry
    {
        return new DocFormsGet200ResponseFieldsItemSignatureValueEntry([
            'kind' => 'scalar',
            'value' => $scalar,
        ]);
    }

    /**
     * @param DocFormsGet200ResponseFieldsItemSignatureValueEntryArray $array
     * @return DocFormsGet200ResponseFieldsItemSignatureValueEntry
     */
    public static function array(DocFormsGet200ResponseFieldsItemSignatureValueEntryArray $array): DocFormsGet200ResponseFieldsItemSignatureValueEntry
    {
        return new DocFormsGet200ResponseFieldsItemSignatureValueEntry([
            'kind' => 'array',
            'value' => $array,
        ]);
    }

    /**
     * @param DocFormsGet200ResponseFieldsItemSignatureValueEntryUnsupported $unsupported
     * @return DocFormsGet200ResponseFieldsItemSignatureValueEntry
     */
    public static function unsupported(DocFormsGet200ResponseFieldsItemSignatureValueEntryUnsupported $unsupported): DocFormsGet200ResponseFieldsItemSignatureValueEntry
    {
        return new DocFormsGet200ResponseFieldsItemSignatureValueEntry([
            'kind' => 'unsupported',
            'value' => $unsupported,
        ]);
    }

    /**
     * @return bool
     */
    public function isNone(): bool
    {
        return $this->value instanceof DocFormsGet200ResponseFieldsItemSignatureValueEntryNone && $this->kind === 'none';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemSignatureValueEntryNone
     */
    public function asNone(): DocFormsGet200ResponseFieldsItemSignatureValueEntryNone
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemSignatureValueEntryNone && $this->kind === 'none')) {
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
        return $this->value instanceof DocFormsGet200ResponseFieldsItemSignatureValueEntryScalar && $this->kind === 'scalar';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemSignatureValueEntryScalar
     */
    public function asScalar(): DocFormsGet200ResponseFieldsItemSignatureValueEntryScalar
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemSignatureValueEntryScalar && $this->kind === 'scalar')) {
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
        return $this->value instanceof DocFormsGet200ResponseFieldsItemSignatureValueEntryArray && $this->kind === 'array';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemSignatureValueEntryArray
     */
    public function asArray(): DocFormsGet200ResponseFieldsItemSignatureValueEntryArray
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemSignatureValueEntryArray && $this->kind === 'array')) {
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
        return $this->value instanceof DocFormsGet200ResponseFieldsItemSignatureValueEntryUnsupported && $this->kind === 'unsupported';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemSignatureValueEntryUnsupported
     */
    public function asUnsupported(): DocFormsGet200ResponseFieldsItemSignatureValueEntryUnsupported
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemSignatureValueEntryUnsupported && $this->kind === 'unsupported')) {
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
                $args['value'] = DocFormsGet200ResponseFieldsItemSignatureValueEntryNone::jsonDeserialize($data);
                break;
            case 'scalar':
                $args['value'] = DocFormsGet200ResponseFieldsItemSignatureValueEntryScalar::jsonDeserialize($data);
                break;
            case 'array':
                $args['value'] = DocFormsGet200ResponseFieldsItemSignatureValueEntryArray::jsonDeserialize($data);
                break;
            case 'unsupported':
                $args['value'] = DocFormsGet200ResponseFieldsItemSignatureValueEntryUnsupported::jsonDeserialize($data);
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
