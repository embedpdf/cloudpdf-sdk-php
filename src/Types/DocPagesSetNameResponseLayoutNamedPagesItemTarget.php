<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class DocPagesSetNameResponseLayoutNamedPagesItemTarget extends JsonSerializableType
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
     *    DocPagesSetNameResponseLayoutNamedPagesItemTargetPage
     *   |DocPagesSetNameResponseLayoutNamedPagesItemTargetTemplate
     *   |DocPagesSetNameResponseLayoutNamedPagesItemTargetDangling
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
     *    DocPagesSetNameResponseLayoutNamedPagesItemTargetPage
     *   |DocPagesSetNameResponseLayoutNamedPagesItemTargetTemplate
     *   |DocPagesSetNameResponseLayoutNamedPagesItemTargetDangling
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
     * @param DocPagesSetNameResponseLayoutNamedPagesItemTargetPage $page
     * @return DocPagesSetNameResponseLayoutNamedPagesItemTarget
     */
    public static function page(DocPagesSetNameResponseLayoutNamedPagesItemTargetPage $page): DocPagesSetNameResponseLayoutNamedPagesItemTarget
    {
        return new DocPagesSetNameResponseLayoutNamedPagesItemTarget([
            'kind' => 'page',
            'value' => $page,
        ]);
    }

    /**
     * @param DocPagesSetNameResponseLayoutNamedPagesItemTargetTemplate $template
     * @return DocPagesSetNameResponseLayoutNamedPagesItemTarget
     */
    public static function template(DocPagesSetNameResponseLayoutNamedPagesItemTargetTemplate $template): DocPagesSetNameResponseLayoutNamedPagesItemTarget
    {
        return new DocPagesSetNameResponseLayoutNamedPagesItemTarget([
            'kind' => 'template',
            'value' => $template,
        ]);
    }

    /**
     * @param DocPagesSetNameResponseLayoutNamedPagesItemTargetDangling $dangling
     * @return DocPagesSetNameResponseLayoutNamedPagesItemTarget
     */
    public static function dangling(DocPagesSetNameResponseLayoutNamedPagesItemTargetDangling $dangling): DocPagesSetNameResponseLayoutNamedPagesItemTarget
    {
        return new DocPagesSetNameResponseLayoutNamedPagesItemTarget([
            'kind' => 'dangling',
            'value' => $dangling,
        ]);
    }

    /**
     * @return bool
     */
    public function isPage(): bool
    {
        return $this->value instanceof DocPagesSetNameResponseLayoutNamedPagesItemTargetPage && $this->kind === 'page';
    }

    /**
     * @return DocPagesSetNameResponseLayoutNamedPagesItemTargetPage
     */
    public function asPage(): DocPagesSetNameResponseLayoutNamedPagesItemTargetPage
    {
        if (!($this->value instanceof DocPagesSetNameResponseLayoutNamedPagesItemTargetPage && $this->kind === 'page')) {
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
        return $this->value instanceof DocPagesSetNameResponseLayoutNamedPagesItemTargetTemplate && $this->kind === 'template';
    }

    /**
     * @return DocPagesSetNameResponseLayoutNamedPagesItemTargetTemplate
     */
    public function asTemplate(): DocPagesSetNameResponseLayoutNamedPagesItemTargetTemplate
    {
        if (!($this->value instanceof DocPagesSetNameResponseLayoutNamedPagesItemTargetTemplate && $this->kind === 'template')) {
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
        return $this->value instanceof DocPagesSetNameResponseLayoutNamedPagesItemTargetDangling && $this->kind === 'dangling';
    }

    /**
     * @return DocPagesSetNameResponseLayoutNamedPagesItemTargetDangling
     */
    public function asDangling(): DocPagesSetNameResponseLayoutNamedPagesItemTargetDangling
    {
        if (!($this->value instanceof DocPagesSetNameResponseLayoutNamedPagesItemTargetDangling && $this->kind === 'dangling')) {
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
                $args['value'] = DocPagesSetNameResponseLayoutNamedPagesItemTargetPage::jsonDeserialize($data);
                break;
            case 'template':
                $args['value'] = DocPagesSetNameResponseLayoutNamedPagesItemTargetTemplate::jsonDeserialize($data);
                break;
            case 'dangling':
                $args['value'] = DocPagesSetNameResponseLayoutNamedPagesItemTargetDangling::jsonDeserialize($data);
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
