<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class DocPagesInsert200ResponseLayoutNamedPagesItemTarget extends JsonSerializableType
{
    /**
     * @var (
     *    'page'
     *   |'template'
     *   |'dangling'
     *   |'_unknown'
     * ) $kind
     */
    public readonly string $kind;

    /**
     * @var (
     *    DocPagesInsert200ResponseLayoutNamedPagesItemTargetPage
     *   |DocPagesInsert200ResponseLayoutNamedPagesItemTargetTemplate
     *   |DocPagesInsert200ResponseLayoutNamedPagesItemTargetDangling
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   kind: (
     *    'page'
     *   |'template'
     *   |'dangling'
     *   |'_unknown'
     * ),
     *   value: (
     *    DocPagesInsert200ResponseLayoutNamedPagesItemTargetPage
     *   |DocPagesInsert200ResponseLayoutNamedPagesItemTargetTemplate
     *   |DocPagesInsert200ResponseLayoutNamedPagesItemTargetDangling
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
     * @param DocPagesInsert200ResponseLayoutNamedPagesItemTargetPage $page
     * @return DocPagesInsert200ResponseLayoutNamedPagesItemTarget
     */
    public static function page(DocPagesInsert200ResponseLayoutNamedPagesItemTargetPage $page): DocPagesInsert200ResponseLayoutNamedPagesItemTarget
    {
        return new DocPagesInsert200ResponseLayoutNamedPagesItemTarget([
            'kind' => 'page',
            'value' => $page,
        ]);
    }

    /**
     * @param DocPagesInsert200ResponseLayoutNamedPagesItemTargetTemplate $template
     * @return DocPagesInsert200ResponseLayoutNamedPagesItemTarget
     */
    public static function template(DocPagesInsert200ResponseLayoutNamedPagesItemTargetTemplate $template): DocPagesInsert200ResponseLayoutNamedPagesItemTarget
    {
        return new DocPagesInsert200ResponseLayoutNamedPagesItemTarget([
            'kind' => 'template',
            'value' => $template,
        ]);
    }

    /**
     * @param DocPagesInsert200ResponseLayoutNamedPagesItemTargetDangling $dangling
     * @return DocPagesInsert200ResponseLayoutNamedPagesItemTarget
     */
    public static function dangling(DocPagesInsert200ResponseLayoutNamedPagesItemTargetDangling $dangling): DocPagesInsert200ResponseLayoutNamedPagesItemTarget
    {
        return new DocPagesInsert200ResponseLayoutNamedPagesItemTarget([
            'kind' => 'dangling',
            'value' => $dangling,
        ]);
    }

    /**
     * @return bool
     */
    public function isPage(): bool
    {
        return $this->value instanceof DocPagesInsert200ResponseLayoutNamedPagesItemTargetPage && $this->kind === 'page';
    }

    /**
     * @return DocPagesInsert200ResponseLayoutNamedPagesItemTargetPage
     */
    public function asPage(): DocPagesInsert200ResponseLayoutNamedPagesItemTargetPage
    {
        if (!($this->value instanceof DocPagesInsert200ResponseLayoutNamedPagesItemTargetPage && $this->kind === 'page')) {
            throw new Exception(
                "Expected page; got " . $this->kind . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isTemplate(): bool
    {
        return $this->value instanceof DocPagesInsert200ResponseLayoutNamedPagesItemTargetTemplate && $this->kind === 'template';
    }

    /**
     * @return DocPagesInsert200ResponseLayoutNamedPagesItemTargetTemplate
     */
    public function asTemplate(): DocPagesInsert200ResponseLayoutNamedPagesItemTargetTemplate
    {
        if (!($this->value instanceof DocPagesInsert200ResponseLayoutNamedPagesItemTargetTemplate && $this->kind === 'template')) {
            throw new Exception(
                "Expected template; got " . $this->kind . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isDangling(): bool
    {
        return $this->value instanceof DocPagesInsert200ResponseLayoutNamedPagesItemTargetDangling && $this->kind === 'dangling';
    }

    /**
     * @return DocPagesInsert200ResponseLayoutNamedPagesItemTargetDangling
     */
    public function asDangling(): DocPagesInsert200ResponseLayoutNamedPagesItemTargetDangling
    {
        if (!($this->value instanceof DocPagesInsert200ResponseLayoutNamedPagesItemTargetDangling && $this->kind === 'dangling')) {
            throw new Exception(
                "Expected dangling; got " . $this->kind . " with value of type " . get_debug_type($this->value),
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
            case 'page':
                $value = $this->asPage()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'template':
                $value = $this->asTemplate()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'dangling':
                $value = $this->asDangling()->jsonSerialize();
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
            case 'page':
                $args['value'] = DocPagesInsert200ResponseLayoutNamedPagesItemTargetPage::jsonDeserialize($data);
                break;
            case 'template':
                $args['value'] = DocPagesInsert200ResponseLayoutNamedPagesItemTargetTemplate::jsonDeserialize($data);
                break;
            case 'dangling':
                $args['value'] = DocPagesInsert200ResponseLayoutNamedPagesItemTargetDangling::jsonDeserialize($data);
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
