<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Exception;

class DocFormsGet200ResponseFieldsItemSignatureRef extends JsonSerializableType
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
     *    DocFormsGet200ResponseFieldsItemSignatureRefObjectNumber
     *   |DocFormsGet200ResponseFieldsItemSignatureRefFqn
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
     *    DocFormsGet200ResponseFieldsItemSignatureRefObjectNumber
     *   |DocFormsGet200ResponseFieldsItemSignatureRefFqn
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
     * @param DocFormsGet200ResponseFieldsItemSignatureRefObjectNumber $objectNumber
     * @return DocFormsGet200ResponseFieldsItemSignatureRef
     */
    public static function objectNumber(DocFormsGet200ResponseFieldsItemSignatureRefObjectNumber $objectNumber): DocFormsGet200ResponseFieldsItemSignatureRef
    {
        return new DocFormsGet200ResponseFieldsItemSignatureRef([
            'kind' => 'objectNumber',
            'value' => $objectNumber,
        ]);
    }

    /**
     * @param DocFormsGet200ResponseFieldsItemSignatureRefFqn $fqn
     * @return DocFormsGet200ResponseFieldsItemSignatureRef
     */
    public static function fqn(DocFormsGet200ResponseFieldsItemSignatureRefFqn $fqn): DocFormsGet200ResponseFieldsItemSignatureRef
    {
        return new DocFormsGet200ResponseFieldsItemSignatureRef([
            'kind' => 'fqn',
            'value' => $fqn,
        ]);
    }

    /**
     * @return bool
     */
    public function isObjectNumber(): bool
    {
        return $this->value instanceof DocFormsGet200ResponseFieldsItemSignatureRefObjectNumber && $this->kind === 'objectNumber';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemSignatureRefObjectNumber
     */
    public function asObjectNumber(): DocFormsGet200ResponseFieldsItemSignatureRefObjectNumber
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemSignatureRefObjectNumber && $this->kind === 'objectNumber')) {
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
        return $this->value instanceof DocFormsGet200ResponseFieldsItemSignatureRefFqn && $this->kind === 'fqn';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemSignatureRefFqn
     */
    public function asFqn(): DocFormsGet200ResponseFieldsItemSignatureRefFqn
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemSignatureRefFqn && $this->kind === 'fqn')) {
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
                $args['value'] = DocFormsGet200ResponseFieldsItemSignatureRefObjectNumber::jsonDeserialize($data);
                break;
            case 'fqn':
                $args['value'] = DocFormsGet200ResponseFieldsItemSignatureRefFqn::jsonDeserialize($data);
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
