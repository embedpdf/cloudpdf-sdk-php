<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class DocPagesSetName200ResponseLayoutNamedPagesItemTarget extends JsonSerializableType
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
     *    DocPagesSetName200ResponseLayoutNamedPagesItemTargetPage
     *   |DocPagesSetName200ResponseLayoutNamedPagesItemTargetTemplate
     *   |DocPagesSetName200ResponseLayoutNamedPagesItemTargetDangling
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
     *    DocPagesSetName200ResponseLayoutNamedPagesItemTargetPage
     *   |DocPagesSetName200ResponseLayoutNamedPagesItemTargetTemplate
     *   |DocPagesSetName200ResponseLayoutNamedPagesItemTargetDangling
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
     * @param DocPagesSetName200ResponseLayoutNamedPagesItemTargetPage $page
     * @return DocPagesSetName200ResponseLayoutNamedPagesItemTarget
     */
    public static function page(DocPagesSetName200ResponseLayoutNamedPagesItemTargetPage $page): DocPagesSetName200ResponseLayoutNamedPagesItemTarget
    {
        return new DocPagesSetName200ResponseLayoutNamedPagesItemTarget([
            'kind' => 'page',
            'value' => $page,
        ]);
    }

    /**
     * @param DocPagesSetName200ResponseLayoutNamedPagesItemTargetTemplate $template
     * @return DocPagesSetName200ResponseLayoutNamedPagesItemTarget
     */
    public static function template(DocPagesSetName200ResponseLayoutNamedPagesItemTargetTemplate $template): DocPagesSetName200ResponseLayoutNamedPagesItemTarget
    {
        return new DocPagesSetName200ResponseLayoutNamedPagesItemTarget([
            'kind' => 'template',
            'value' => $template,
        ]);
    }

    /**
     * @param DocPagesSetName200ResponseLayoutNamedPagesItemTargetDangling $dangling
     * @return DocPagesSetName200ResponseLayoutNamedPagesItemTarget
     */
    public static function dangling(DocPagesSetName200ResponseLayoutNamedPagesItemTargetDangling $dangling): DocPagesSetName200ResponseLayoutNamedPagesItemTarget
    {
        return new DocPagesSetName200ResponseLayoutNamedPagesItemTarget([
            'kind' => 'dangling',
            'value' => $dangling,
        ]);
    }

    /**
     * @return bool
     */
    public function isPage(): bool
    {
        return $this->value instanceof DocPagesSetName200ResponseLayoutNamedPagesItemTargetPage && $this->kind === 'page';
    }

    /**
     * @return DocPagesSetName200ResponseLayoutNamedPagesItemTargetPage
     */
    public function asPage(): DocPagesSetName200ResponseLayoutNamedPagesItemTargetPage
    {
        if (!($this->value instanceof DocPagesSetName200ResponseLayoutNamedPagesItemTargetPage && $this->kind === 'page')) {
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
        return $this->value instanceof DocPagesSetName200ResponseLayoutNamedPagesItemTargetTemplate && $this->kind === 'template';
    }

    /**
     * @return DocPagesSetName200ResponseLayoutNamedPagesItemTargetTemplate
     */
    public function asTemplate(): DocPagesSetName200ResponseLayoutNamedPagesItemTargetTemplate
    {
        if (!($this->value instanceof DocPagesSetName200ResponseLayoutNamedPagesItemTargetTemplate && $this->kind === 'template')) {
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
        return $this->value instanceof DocPagesSetName200ResponseLayoutNamedPagesItemTargetDangling && $this->kind === 'dangling';
    }

    /**
     * @return DocPagesSetName200ResponseLayoutNamedPagesItemTargetDangling
     */
    public function asDangling(): DocPagesSetName200ResponseLayoutNamedPagesItemTargetDangling
    {
        if (!($this->value instanceof DocPagesSetName200ResponseLayoutNamedPagesItemTargetDangling && $this->kind === 'dangling')) {
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
                $args['value'] = DocPagesSetName200ResponseLayoutNamedPagesItemTargetPage::jsonDeserialize($data);
                break;
            case 'template':
                $args['value'] = DocPagesSetName200ResponseLayoutNamedPagesItemTargetTemplate::jsonDeserialize($data);
                break;
            case 'dangling':
                $args['value'] = DocPagesSetName200ResponseLayoutNamedPagesItemTargetDangling::jsonDeserialize($data);
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
