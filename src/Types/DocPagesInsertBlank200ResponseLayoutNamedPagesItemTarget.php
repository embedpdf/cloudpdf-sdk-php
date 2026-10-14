<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class DocPagesInsertBlank200ResponseLayoutNamedPagesItemTarget extends JsonSerializableType
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
     *    DocPagesInsertBlank200ResponseLayoutNamedPagesItemTargetPage
     *   |DocPagesInsertBlank200ResponseLayoutNamedPagesItemTargetTemplate
     *   |DocPagesInsertBlank200ResponseLayoutNamedPagesItemTargetDangling
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
     *    DocPagesInsertBlank200ResponseLayoutNamedPagesItemTargetPage
     *   |DocPagesInsertBlank200ResponseLayoutNamedPagesItemTargetTemplate
     *   |DocPagesInsertBlank200ResponseLayoutNamedPagesItemTargetDangling
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
     * @param DocPagesInsertBlank200ResponseLayoutNamedPagesItemTargetPage $page
     * @return DocPagesInsertBlank200ResponseLayoutNamedPagesItemTarget
     */
    public static function page(DocPagesInsertBlank200ResponseLayoutNamedPagesItemTargetPage $page): DocPagesInsertBlank200ResponseLayoutNamedPagesItemTarget
    {
        return new DocPagesInsertBlank200ResponseLayoutNamedPagesItemTarget([
            'kind' => 'page',
            'value' => $page,
        ]);
    }

    /**
     * @param DocPagesInsertBlank200ResponseLayoutNamedPagesItemTargetTemplate $template
     * @return DocPagesInsertBlank200ResponseLayoutNamedPagesItemTarget
     */
    public static function template(DocPagesInsertBlank200ResponseLayoutNamedPagesItemTargetTemplate $template): DocPagesInsertBlank200ResponseLayoutNamedPagesItemTarget
    {
        return new DocPagesInsertBlank200ResponseLayoutNamedPagesItemTarget([
            'kind' => 'template',
            'value' => $template,
        ]);
    }

    /**
     * @param DocPagesInsertBlank200ResponseLayoutNamedPagesItemTargetDangling $dangling
     * @return DocPagesInsertBlank200ResponseLayoutNamedPagesItemTarget
     */
    public static function dangling(DocPagesInsertBlank200ResponseLayoutNamedPagesItemTargetDangling $dangling): DocPagesInsertBlank200ResponseLayoutNamedPagesItemTarget
    {
        return new DocPagesInsertBlank200ResponseLayoutNamedPagesItemTarget([
            'kind' => 'dangling',
            'value' => $dangling,
        ]);
    }

    /**
     * @return bool
     */
    public function isPage(): bool
    {
        return $this->value instanceof DocPagesInsertBlank200ResponseLayoutNamedPagesItemTargetPage && $this->kind === 'page';
    }

    /**
     * @return DocPagesInsertBlank200ResponseLayoutNamedPagesItemTargetPage
     */
    public function asPage(): DocPagesInsertBlank200ResponseLayoutNamedPagesItemTargetPage
    {
        if (!($this->value instanceof DocPagesInsertBlank200ResponseLayoutNamedPagesItemTargetPage && $this->kind === 'page')) {
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
        return $this->value instanceof DocPagesInsertBlank200ResponseLayoutNamedPagesItemTargetTemplate && $this->kind === 'template';
    }

    /**
     * @return DocPagesInsertBlank200ResponseLayoutNamedPagesItemTargetTemplate
     */
    public function asTemplate(): DocPagesInsertBlank200ResponseLayoutNamedPagesItemTargetTemplate
    {
        if (!($this->value instanceof DocPagesInsertBlank200ResponseLayoutNamedPagesItemTargetTemplate && $this->kind === 'template')) {
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
        return $this->value instanceof DocPagesInsertBlank200ResponseLayoutNamedPagesItemTargetDangling && $this->kind === 'dangling';
    }

    /**
     * @return DocPagesInsertBlank200ResponseLayoutNamedPagesItemTargetDangling
     */
    public function asDangling(): DocPagesInsertBlank200ResponseLayoutNamedPagesItemTargetDangling
    {
        if (!($this->value instanceof DocPagesInsertBlank200ResponseLayoutNamedPagesItemTargetDangling && $this->kind === 'dangling')) {
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
                $args['value'] = DocPagesInsertBlank200ResponseLayoutNamedPagesItemTargetPage::jsonDeserialize($data);
                break;
            case 'template':
                $args['value'] = DocPagesInsertBlank200ResponseLayoutNamedPagesItemTargetTemplate::jsonDeserialize($data);
                break;
            case 'dangling':
                $args['value'] = DocPagesInsertBlank200ResponseLayoutNamedPagesItemTargetDangling::jsonDeserialize($data);
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
