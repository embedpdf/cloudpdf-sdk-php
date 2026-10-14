<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class DocPagesReorder200ResponseLayoutNamedPagesItemTarget extends JsonSerializableType
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
     *    DocPagesReorder200ResponseLayoutNamedPagesItemTargetPage
     *   |DocPagesReorder200ResponseLayoutNamedPagesItemTargetTemplate
     *   |DocPagesReorder200ResponseLayoutNamedPagesItemTargetDangling
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
     *    DocPagesReorder200ResponseLayoutNamedPagesItemTargetPage
     *   |DocPagesReorder200ResponseLayoutNamedPagesItemTargetTemplate
     *   |DocPagesReorder200ResponseLayoutNamedPagesItemTargetDangling
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
     * @param DocPagesReorder200ResponseLayoutNamedPagesItemTargetPage $page
     * @return DocPagesReorder200ResponseLayoutNamedPagesItemTarget
     */
    public static function page(DocPagesReorder200ResponseLayoutNamedPagesItemTargetPage $page): DocPagesReorder200ResponseLayoutNamedPagesItemTarget
    {
        return new DocPagesReorder200ResponseLayoutNamedPagesItemTarget([
            'kind' => 'page',
            'value' => $page,
        ]);
    }

    /**
     * @param DocPagesReorder200ResponseLayoutNamedPagesItemTargetTemplate $template
     * @return DocPagesReorder200ResponseLayoutNamedPagesItemTarget
     */
    public static function template(DocPagesReorder200ResponseLayoutNamedPagesItemTargetTemplate $template): DocPagesReorder200ResponseLayoutNamedPagesItemTarget
    {
        return new DocPagesReorder200ResponseLayoutNamedPagesItemTarget([
            'kind' => 'template',
            'value' => $template,
        ]);
    }

    /**
     * @param DocPagesReorder200ResponseLayoutNamedPagesItemTargetDangling $dangling
     * @return DocPagesReorder200ResponseLayoutNamedPagesItemTarget
     */
    public static function dangling(DocPagesReorder200ResponseLayoutNamedPagesItemTargetDangling $dangling): DocPagesReorder200ResponseLayoutNamedPagesItemTarget
    {
        return new DocPagesReorder200ResponseLayoutNamedPagesItemTarget([
            'kind' => 'dangling',
            'value' => $dangling,
        ]);
    }

    /**
     * @return bool
     */
    public function isPage(): bool
    {
        return $this->value instanceof DocPagesReorder200ResponseLayoutNamedPagesItemTargetPage && $this->kind === 'page';
    }

    /**
     * @return DocPagesReorder200ResponseLayoutNamedPagesItemTargetPage
     */
    public function asPage(): DocPagesReorder200ResponseLayoutNamedPagesItemTargetPage
    {
        if (!($this->value instanceof DocPagesReorder200ResponseLayoutNamedPagesItemTargetPage && $this->kind === 'page')) {
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
        return $this->value instanceof DocPagesReorder200ResponseLayoutNamedPagesItemTargetTemplate && $this->kind === 'template';
    }

    /**
     * @return DocPagesReorder200ResponseLayoutNamedPagesItemTargetTemplate
     */
    public function asTemplate(): DocPagesReorder200ResponseLayoutNamedPagesItemTargetTemplate
    {
        if (!($this->value instanceof DocPagesReorder200ResponseLayoutNamedPagesItemTargetTemplate && $this->kind === 'template')) {
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
        return $this->value instanceof DocPagesReorder200ResponseLayoutNamedPagesItemTargetDangling && $this->kind === 'dangling';
    }

    /**
     * @return DocPagesReorder200ResponseLayoutNamedPagesItemTargetDangling
     */
    public function asDangling(): DocPagesReorder200ResponseLayoutNamedPagesItemTargetDangling
    {
        if (!($this->value instanceof DocPagesReorder200ResponseLayoutNamedPagesItemTargetDangling && $this->kind === 'dangling')) {
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
                $args['value'] = DocPagesReorder200ResponseLayoutNamedPagesItemTargetPage::jsonDeserialize($data);
                break;
            case 'template':
                $args['value'] = DocPagesReorder200ResponseLayoutNamedPagesItemTargetTemplate::jsonDeserialize($data);
                break;
            case 'dangling':
                $args['value'] = DocPagesReorder200ResponseLayoutNamedPagesItemTargetDangling::jsonDeserialize($data);
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
