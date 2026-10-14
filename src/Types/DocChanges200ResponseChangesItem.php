<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class DocChanges200ResponseChangesItem extends JsonSerializableType
{
    /**
     * @var (
     *    'applied'
     *   |'refused'
     *   |'_unknown'
     * ) $status
     */
    public readonly string $status;

    /**
     * @var (
     *    DocChanges200ResponseChangesItemApplied
     *   |DocChanges200ResponseChangesItemRefused
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   status: (
     *    'applied'
     *   |'refused'
     *   |'_unknown'
     * ),
     *   value: (
     *    DocChanges200ResponseChangesItemApplied
     *   |DocChanges200ResponseChangesItemRefused
     *   |mixed
     * ),
     * } $values
     */
    private function __construct(
        array $values,
    ) {
        $this->status = $values['status'];
        $this->value = $values['value'];
    }

    /**
     * @param DocChanges200ResponseChangesItemApplied $applied
     * @return DocChanges200ResponseChangesItem
     */
    public static function applied(DocChanges200ResponseChangesItemApplied $applied): DocChanges200ResponseChangesItem
    {
        return new DocChanges200ResponseChangesItem([
            'status' => 'applied',
            'value' => $applied,
        ]);
    }

    /**
     * @param DocChanges200ResponseChangesItemRefused $refused
     * @return DocChanges200ResponseChangesItem
     */
    public static function refused(DocChanges200ResponseChangesItemRefused $refused): DocChanges200ResponseChangesItem
    {
        return new DocChanges200ResponseChangesItem([
            'status' => 'refused',
            'value' => $refused,
        ]);
    }

    /**
     * @return bool
     */
    public function isApplied(): bool
    {
        return $this->value instanceof DocChanges200ResponseChangesItemApplied && $this->status === 'applied';
    }

    /**
     * @return DocChanges200ResponseChangesItemApplied
     */
    public function asApplied(): DocChanges200ResponseChangesItemApplied
    {
        if (!($this->value instanceof DocChanges200ResponseChangesItemApplied && $this->status === 'applied')) {
            throw new Exception(
                "Expected applied; got " . $this->status . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isRefused(): bool
    {
        return $this->value instanceof DocChanges200ResponseChangesItemRefused && $this->status === 'refused';
    }

    /**
     * @return DocChanges200ResponseChangesItemRefused
     */
    public function asRefused(): DocChanges200ResponseChangesItemRefused
    {
        if (!($this->value instanceof DocChanges200ResponseChangesItemRefused && $this->status === 'refused')) {
            throw new Exception(
                "Expected refused; got " . $this->status . " with value of type " . get_debug_type($this->value),
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
        $result['status'] = $this->status;

        $base = parent::jsonSerialize();
        $result = array_merge($base, $result);

        switch ($this->status) {
            case 'applied':
                $value = $this->asApplied()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'refused':
                $value = $this->asRefused()->jsonSerialize();
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
        if (!array_key_exists('status', $data)) {
            throw new Exception(
                "JSON data is missing property 'status'",
            );
        }
        $status = $data['status'];
        if (!(is_string($status))) {
            throw new Exception(
                "Expected property 'status' in JSON data to be string, instead received " . get_debug_type($data['status']),
            );
        }

        $args['status'] = $status;
        switch ($status) {
            case 'applied':
                $args['value'] = DocChanges200ResponseChangesItemApplied::jsonDeserialize($data);
                break;
            case 'refused':
                $args['value'] = DocChanges200ResponseChangesItemRefused::jsonDeserialize($data);
                break;
            case '_unknown':
            default:
                $args['status'] = '_unknown';
                $args['value'] = $data;
        }

        // @phpstan-ignore-next-line
        return new static($args);
    }
}
