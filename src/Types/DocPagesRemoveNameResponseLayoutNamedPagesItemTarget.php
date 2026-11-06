<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class DocPagesRemoveNameResponseLayoutNamedPagesItemTarget extends JsonSerializableType
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
     *    DocPagesRemoveNameResponseLayoutNamedPagesItemTargetPage
     *   |DocPagesRemoveNameResponseLayoutNamedPagesItemTargetTemplate
     *   |DocPagesRemoveNameResponseLayoutNamedPagesItemTargetDangling
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
     *    DocPagesRemoveNameResponseLayoutNamedPagesItemTargetPage
     *   |DocPagesRemoveNameResponseLayoutNamedPagesItemTargetTemplate
     *   |DocPagesRemoveNameResponseLayoutNamedPagesItemTargetDangling
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
     * @param DocPagesRemoveNameResponseLayoutNamedPagesItemTargetPage $page
     * @return DocPagesRemoveNameResponseLayoutNamedPagesItemTarget
     */
    public static function page(DocPagesRemoveNameResponseLayoutNamedPagesItemTargetPage $page): DocPagesRemoveNameResponseLayoutNamedPagesItemTarget
    {
        return new DocPagesRemoveNameResponseLayoutNamedPagesItemTarget([
            'kind' => 'page',
            'value' => $page,
        ]);
    }

    /**
     * @param DocPagesRemoveNameResponseLayoutNamedPagesItemTargetTemplate $template
     * @return DocPagesRemoveNameResponseLayoutNamedPagesItemTarget
     */
    public static function template(DocPagesRemoveNameResponseLayoutNamedPagesItemTargetTemplate $template): DocPagesRemoveNameResponseLayoutNamedPagesItemTarget
    {
        return new DocPagesRemoveNameResponseLayoutNamedPagesItemTarget([
            'kind' => 'template',
            'value' => $template,
        ]);
    }

    /**
     * @param DocPagesRemoveNameResponseLayoutNamedPagesItemTargetDangling $dangling
     * @return DocPagesRemoveNameResponseLayoutNamedPagesItemTarget
     */
    public static function dangling(DocPagesRemoveNameResponseLayoutNamedPagesItemTargetDangling $dangling): DocPagesRemoveNameResponseLayoutNamedPagesItemTarget
    {
        return new DocPagesRemoveNameResponseLayoutNamedPagesItemTarget([
            'kind' => 'dangling',
            'value' => $dangling,
        ]);
    }

    /**
     * @return bool
     */
    public function isPage(): bool
    {
        return $this->value instanceof DocPagesRemoveNameResponseLayoutNamedPagesItemTargetPage && $this->kind === 'page';
    }

    /**
     * @return DocPagesRemoveNameResponseLayoutNamedPagesItemTargetPage
     */
    public function asPage(): DocPagesRemoveNameResponseLayoutNamedPagesItemTargetPage
    {
        if (!($this->value instanceof DocPagesRemoveNameResponseLayoutNamedPagesItemTargetPage && $this->kind === 'page')) {
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
        return $this->value instanceof DocPagesRemoveNameResponseLayoutNamedPagesItemTargetTemplate && $this->kind === 'template';
    }

    /**
     * @return DocPagesRemoveNameResponseLayoutNamedPagesItemTargetTemplate
     */
    public function asTemplate(): DocPagesRemoveNameResponseLayoutNamedPagesItemTargetTemplate
    {
        if (!($this->value instanceof DocPagesRemoveNameResponseLayoutNamedPagesItemTargetTemplate && $this->kind === 'template')) {
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
        return $this->value instanceof DocPagesRemoveNameResponseLayoutNamedPagesItemTargetDangling && $this->kind === 'dangling';
    }

    /**
     * @return DocPagesRemoveNameResponseLayoutNamedPagesItemTargetDangling
     */
    public function asDangling(): DocPagesRemoveNameResponseLayoutNamedPagesItemTargetDangling
    {
        if (!($this->value instanceof DocPagesRemoveNameResponseLayoutNamedPagesItemTargetDangling && $this->kind === 'dangling')) {
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
                $args['value'] = DocPagesRemoveNameResponseLayoutNamedPagesItemTargetPage::jsonDeserialize($data);
                break;
            case 'template':
                $args['value'] = DocPagesRemoveNameResponseLayoutNamedPagesItemTargetTemplate::jsonDeserialize($data);
                break;
            case 'dangling':
                $args['value'] = DocPagesRemoveNameResponseLayoutNamedPagesItemTargetDangling::jsonDeserialize($data);
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
