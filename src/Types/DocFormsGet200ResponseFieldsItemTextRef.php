<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Exception;

class DocFormsGet200ResponseFieldsItemTextRef extends JsonSerializableType
{
    /**
     * @var (
     *    'objectNumber'
     *   |'fqn'
     *   |'_unknown'
     * ) $kind
     */
    public readonly string $kind;

    /**
     * @var (
     *    DocFormsGet200ResponseFieldsItemTextRefObjectNumber
     *   |DocFormsGet200ResponseFieldsItemTextRefFqn
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   kind: (
     *    'objectNumber'
     *   |'fqn'
     *   |'_unknown'
     * ),
     *   value: (
     *    DocFormsGet200ResponseFieldsItemTextRefObjectNumber
     *   |DocFormsGet200ResponseFieldsItemTextRefFqn
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
     * @param DocFormsGet200ResponseFieldsItemTextRefObjectNumber $objectNumber
     * @return DocFormsGet200ResponseFieldsItemTextRef
     */
    public static function objectNumber(DocFormsGet200ResponseFieldsItemTextRefObjectNumber $objectNumber): DocFormsGet200ResponseFieldsItemTextRef
    {
        return new DocFormsGet200ResponseFieldsItemTextRef([
            'kind' => 'objectNumber',
            'value' => $objectNumber,
        ]);
    }

    /**
     * @param DocFormsGet200ResponseFieldsItemTextRefFqn $fqn
     * @return DocFormsGet200ResponseFieldsItemTextRef
     */
    public static function fqn(DocFormsGet200ResponseFieldsItemTextRefFqn $fqn): DocFormsGet200ResponseFieldsItemTextRef
    {
        return new DocFormsGet200ResponseFieldsItemTextRef([
            'kind' => 'fqn',
            'value' => $fqn,
        ]);
    }

    /**
     * @return bool
     */
    public function isObjectNumber(): bool
    {
        return $this->value instanceof DocFormsGet200ResponseFieldsItemTextRefObjectNumber && $this->kind === 'objectNumber';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemTextRefObjectNumber
     */
    public function asObjectNumber(): DocFormsGet200ResponseFieldsItemTextRefObjectNumber
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemTextRefObjectNumber && $this->kind === 'objectNumber')) {
            throw new Exception(
                "Expected objectNumber; got " . $this->kind . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isFqn(): bool
    {
        return $this->value instanceof DocFormsGet200ResponseFieldsItemTextRefFqn && $this->kind === 'fqn';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemTextRefFqn
     */
    public function asFqn(): DocFormsGet200ResponseFieldsItemTextRefFqn
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemTextRefFqn && $this->kind === 'fqn')) {
            throw new Exception(
                "Expected fqn; got " . $this->kind . " with value of type " . get_debug_type($this->value),
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
            case 'fqn':
                $value = $this->asFqn()->jsonSerialize();
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
                $args['value'] = DocFormsGet200ResponseFieldsItemTextRefObjectNumber::jsonDeserialize($data);
                break;
            case 'fqn':
                $args['value'] = DocFormsGet200ResponseFieldsItemTextRefFqn::jsonDeserialize($data);
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
