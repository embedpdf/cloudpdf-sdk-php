<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class ChangeItemPagesInsertBlankLayoutNamedPagesItemTarget extends JsonSerializableType
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
     *    ChangeItemPagesInsertBlankLayoutNamedPagesItemTargetPage
     *   |ChangeItemPagesInsertBlankLayoutNamedPagesItemTargetTemplate
     *   |ChangeItemPagesInsertBlankLayoutNamedPagesItemTargetDangling
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
     *    ChangeItemPagesInsertBlankLayoutNamedPagesItemTargetPage
     *   |ChangeItemPagesInsertBlankLayoutNamedPagesItemTargetTemplate
     *   |ChangeItemPagesInsertBlankLayoutNamedPagesItemTargetDangling
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
     * @param ChangeItemPagesInsertBlankLayoutNamedPagesItemTargetPage $page
     * @return ChangeItemPagesInsertBlankLayoutNamedPagesItemTarget
     */
    public static function page(ChangeItemPagesInsertBlankLayoutNamedPagesItemTargetPage $page): ChangeItemPagesInsertBlankLayoutNamedPagesItemTarget
    {
        return new ChangeItemPagesInsertBlankLayoutNamedPagesItemTarget([
            'kind' => 'page',
            'value' => $page,
        ]);
    }

    /**
     * @param ChangeItemPagesInsertBlankLayoutNamedPagesItemTargetTemplate $template
     * @return ChangeItemPagesInsertBlankLayoutNamedPagesItemTarget
     */
    public static function template(ChangeItemPagesInsertBlankLayoutNamedPagesItemTargetTemplate $template): ChangeItemPagesInsertBlankLayoutNamedPagesItemTarget
    {
        return new ChangeItemPagesInsertBlankLayoutNamedPagesItemTarget([
            'kind' => 'template',
            'value' => $template,
        ]);
    }

    /**
     * @param ChangeItemPagesInsertBlankLayoutNamedPagesItemTargetDangling $dangling
     * @return ChangeItemPagesInsertBlankLayoutNamedPagesItemTarget
     */
    public static function dangling(ChangeItemPagesInsertBlankLayoutNamedPagesItemTargetDangling $dangling): ChangeItemPagesInsertBlankLayoutNamedPagesItemTarget
    {
        return new ChangeItemPagesInsertBlankLayoutNamedPagesItemTarget([
            'kind' => 'dangling',
            'value' => $dangling,
        ]);
    }

    /**
     * @return bool
     */
    public function isPage(): bool
    {
        return $this->value instanceof ChangeItemPagesInsertBlankLayoutNamedPagesItemTargetPage && $this->kind === 'page';
    }

    /**
     * @return ChangeItemPagesInsertBlankLayoutNamedPagesItemTargetPage
     */
    public function asPage(): ChangeItemPagesInsertBlankLayoutNamedPagesItemTargetPage
    {
        if (!($this->value instanceof ChangeItemPagesInsertBlankLayoutNamedPagesItemTargetPage && $this->kind === 'page')) {
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
        return $this->value instanceof ChangeItemPagesInsertBlankLayoutNamedPagesItemTargetTemplate && $this->kind === 'template';
    }

    /**
     * @return ChangeItemPagesInsertBlankLayoutNamedPagesItemTargetTemplate
     */
    public function asTemplate(): ChangeItemPagesInsertBlankLayoutNamedPagesItemTargetTemplate
    {
        if (!($this->value instanceof ChangeItemPagesInsertBlankLayoutNamedPagesItemTargetTemplate && $this->kind === 'template')) {
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
        return $this->value instanceof ChangeItemPagesInsertBlankLayoutNamedPagesItemTargetDangling && $this->kind === 'dangling';
    }

    /**
     * @return ChangeItemPagesInsertBlankLayoutNamedPagesItemTargetDangling
     */
    public function asDangling(): ChangeItemPagesInsertBlankLayoutNamedPagesItemTargetDangling
    {
        if (!($this->value instanceof ChangeItemPagesInsertBlankLayoutNamedPagesItemTargetDangling && $this->kind === 'dangling')) {
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
                $args['value'] = ChangeItemPagesInsertBlankLayoutNamedPagesItemTargetPage::jsonDeserialize($data);
                break;
            case 'template':
                $args['value'] = ChangeItemPagesInsertBlankLayoutNamedPagesItemTargetTemplate::jsonDeserialize($data);
                break;
            case 'dangling':
                $args['value'] = ChangeItemPagesInsertBlankLayoutNamedPagesItemTargetDangling::jsonDeserialize($data);
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
