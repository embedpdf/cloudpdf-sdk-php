<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class PdfActionNode extends JsonSerializableType
{
    /**
     * @var (
     *    'javascript'
     *   |'goto'
     *   |'uri'
     *   |'named'
     *   |'hide'
     *   |'reset-form'
     *   |'goto-remote'
     *   |'goto-embedded'
     *   |'launch'
     *   |'rendition'
     *   |'submit-form'
     *   |'thread'
     *   |'sound'
     *   |'movie'
     *   |'import-data'
     *   |'set-ocg-state'
     *   |'transition'
     *   |'goto-3d-view'
     *   |'unknown'
     *   |'_unknown'
     * ) $type
     */
    public readonly string $type;

    /**
     * @var (
     *    PdfActionNodeJavascript
     *   |PdfActionNodeGoto
     *   |PdfActionNodeUri
     *   |PdfActionNodeNamed
     *   |PdfActionNodeHide
     *   |PdfActionNodeResetForm
     *   |PdfActionNodeGotoRemote
     *   |PdfActionNodeGotoEmbedded
     *   |PdfActionNodeLaunch
     *   |PdfActionNodeRendition
     *   |PdfActionNodeSubmitForm
     *   |PdfActionNodeThread
     *   |PdfActionNodeSound
     *   |PdfActionNodeMovie
     *   |PdfActionNodeImportData
     *   |PdfActionNodeSetOcgState
     *   |PdfActionNodeTransition
     *   |PdfActionNodeGoto3DView
     *   |PdfActionNodeUnknown
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   type: (
     *    'javascript'
     *   |'goto'
     *   |'uri'
     *   |'named'
     *   |'hide'
     *   |'reset-form'
     *   |'goto-remote'
     *   |'goto-embedded'
     *   |'launch'
     *   |'rendition'
     *   |'submit-form'
     *   |'thread'
     *   |'sound'
     *   |'movie'
     *   |'import-data'
     *   |'set-ocg-state'
     *   |'transition'
     *   |'goto-3d-view'
     *   |'unknown'
     *   |'_unknown'
     * ),
     *   value: (
     *    PdfActionNodeJavascript
     *   |PdfActionNodeGoto
     *   |PdfActionNodeUri
     *   |PdfActionNodeNamed
     *   |PdfActionNodeHide
     *   |PdfActionNodeResetForm
     *   |PdfActionNodeGotoRemote
     *   |PdfActionNodeGotoEmbedded
     *   |PdfActionNodeLaunch
     *   |PdfActionNodeRendition
     *   |PdfActionNodeSubmitForm
     *   |PdfActionNodeThread
     *   |PdfActionNodeSound
     *   |PdfActionNodeMovie
     *   |PdfActionNodeImportData
     *   |PdfActionNodeSetOcgState
     *   |PdfActionNodeTransition
     *   |PdfActionNodeGoto3DView
     *   |PdfActionNodeUnknown
     *   |mixed
     * ),
     * } $values
     */
    private function __construct(
        array $values,
    ) {
        $this->type = $values['type'];
        $this->value = $values['value'];
    }

    /**
     * @param PdfActionNodeJavascript $javascript
     * @return PdfActionNode
     */
    public static function javascript(PdfActionNodeJavascript $javascript): PdfActionNode
    {
        return new PdfActionNode([
            'type' => 'javascript',
            'value' => $javascript,
        ]);
    }

    /**
     * @param PdfActionNodeGoto $goto
     * @return PdfActionNode
     */
    public static function goto(PdfActionNodeGoto $goto): PdfActionNode
    {
        return new PdfActionNode([
            'type' => 'goto',
            'value' => $goto,
        ]);
    }

    /**
     * @param PdfActionNodeUri $uri
     * @return PdfActionNode
     */
    public static function uri(PdfActionNodeUri $uri): PdfActionNode
    {
        return new PdfActionNode([
            'type' => 'uri',
            'value' => $uri,
        ]);
    }

    /**
     * @param PdfActionNodeNamed $named
     * @return PdfActionNode
     */
    public static function named(PdfActionNodeNamed $named): PdfActionNode
    {
        return new PdfActionNode([
            'type' => 'named',
            'value' => $named,
        ]);
    }

    /**
     * @param PdfActionNodeHide $hide
     * @return PdfActionNode
     */
    public static function hide(PdfActionNodeHide $hide): PdfActionNode
    {
        return new PdfActionNode([
            'type' => 'hide',
            'value' => $hide,
        ]);
    }

    /**
     * @param PdfActionNodeResetForm $resetForm
     * @return PdfActionNode
     */
    public static function resetForm(PdfActionNodeResetForm $resetForm): PdfActionNode
    {
        return new PdfActionNode([
            'type' => 'reset-form',
            'value' => $resetForm,
        ]);
    }

    /**
     * @param PdfActionNodeGotoRemote $gotoRemote
     * @return PdfActionNode
     */
    public static function gotoRemote(PdfActionNodeGotoRemote $gotoRemote): PdfActionNode
    {
        return new PdfActionNode([
            'type' => 'goto-remote',
            'value' => $gotoRemote,
        ]);
    }

    /**
     * @param PdfActionNodeGotoEmbedded $gotoEmbedded
     * @return PdfActionNode
     */
    public static function gotoEmbedded(PdfActionNodeGotoEmbedded $gotoEmbedded): PdfActionNode
    {
        return new PdfActionNode([
            'type' => 'goto-embedded',
            'value' => $gotoEmbedded,
        ]);
    }

    /**
     * @param PdfActionNodeLaunch $launch
     * @return PdfActionNode
     */
    public static function launch(PdfActionNodeLaunch $launch): PdfActionNode
    {
        return new PdfActionNode([
            'type' => 'launch',
            'value' => $launch,
        ]);
    }

    /**
     * @param PdfActionNodeRendition $rendition
     * @return PdfActionNode
     */
    public static function rendition(PdfActionNodeRendition $rendition): PdfActionNode
    {
        return new PdfActionNode([
            'type' => 'rendition',
            'value' => $rendition,
        ]);
    }

    /**
     * @param PdfActionNodeSubmitForm $submitForm
     * @return PdfActionNode
     */
    public static function submitForm(PdfActionNodeSubmitForm $submitForm): PdfActionNode
    {
        return new PdfActionNode([
            'type' => 'submit-form',
            'value' => $submitForm,
        ]);
    }

    /**
     * @param PdfActionNodeThread $thread
     * @return PdfActionNode
     */
    public static function thread(PdfActionNodeThread $thread): PdfActionNode
    {
        return new PdfActionNode([
            'type' => 'thread',
            'value' => $thread,
        ]);
    }

    /**
     * @param PdfActionNodeSound $sound
     * @return PdfActionNode
     */
    public static function sound(PdfActionNodeSound $sound): PdfActionNode
    {
        return new PdfActionNode([
            'type' => 'sound',
            'value' => $sound,
        ]);
    }

    /**
     * @param PdfActionNodeMovie $movie
     * @return PdfActionNode
     */
    public static function movie(PdfActionNodeMovie $movie): PdfActionNode
    {
        return new PdfActionNode([
            'type' => 'movie',
            'value' => $movie,
        ]);
    }

    /**
     * @param PdfActionNodeImportData $importData
     * @return PdfActionNode
     */
    public static function importData(PdfActionNodeImportData $importData): PdfActionNode
    {
        return new PdfActionNode([
            'type' => 'import-data',
            'value' => $importData,
        ]);
    }

    /**
     * @param PdfActionNodeSetOcgState $setOcgState
     * @return PdfActionNode
     */
    public static function setOcgState(PdfActionNodeSetOcgState $setOcgState): PdfActionNode
    {
        return new PdfActionNode([
            'type' => 'set-ocg-state',
            'value' => $setOcgState,
        ]);
    }

    /**
     * @param PdfActionNodeTransition $transition
     * @return PdfActionNode
     */
    public static function transition(PdfActionNodeTransition $transition): PdfActionNode
    {
        return new PdfActionNode([
            'type' => 'transition',
            'value' => $transition,
        ]);
    }

    /**
     * @param PdfActionNodeGoto3DView $goto3DView
     * @return PdfActionNode
     */
    public static function goto3DView(PdfActionNodeGoto3DView $goto3DView): PdfActionNode
    {
        return new PdfActionNode([
            'type' => 'goto-3d-view',
            'value' => $goto3DView,
        ]);
    }

    /**
     * @param PdfActionNodeUnknown $unknown
     * @return PdfActionNode
     */
    public static function unknown(PdfActionNodeUnknown $unknown): PdfActionNode
    {
        return new PdfActionNode([
            'type' => 'unknown',
            'value' => $unknown,
        ]);
    }

    /**
     * @return bool
     */
    public function isJavascript(): bool
    {
        return $this->value instanceof PdfActionNodeJavascript && $this->type === 'javascript';
    }

    /**
     * @return PdfActionNodeJavascript
     */
    public function asJavascript(): PdfActionNodeJavascript
    {
        if (!($this->value instanceof PdfActionNodeJavascript && $this->type === 'javascript')) {
            throw new Exception(
                "Expected javascript; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isGoto_(): bool
    {
        return $this->value instanceof PdfActionNodeGoto && $this->type === 'goto';
    }

    /**
     * @return PdfActionNodeGoto
     */
    public function asGoto_(): PdfActionNodeGoto
    {
        if (!($this->value instanceof PdfActionNodeGoto && $this->type === 'goto')) {
            throw new Exception(
                "Expected goto; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isUri(): bool
    {
        return $this->value instanceof PdfActionNodeUri && $this->type === 'uri';
    }

    /**
     * @return PdfActionNodeUri
     */
    public function asUri(): PdfActionNodeUri
    {
        if (!($this->value instanceof PdfActionNodeUri && $this->type === 'uri')) {
            throw new Exception(
                "Expected uri; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isNamed(): bool
    {
        return $this->value instanceof PdfActionNodeNamed && $this->type === 'named';
    }

    /**
     * @return PdfActionNodeNamed
     */
    public function asNamed(): PdfActionNodeNamed
    {
        if (!($this->value instanceof PdfActionNodeNamed && $this->type === 'named')) {
            throw new Exception(
                "Expected named; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isHide(): bool
    {
        return $this->value instanceof PdfActionNodeHide && $this->type === 'hide';
    }

    /**
     * @return PdfActionNodeHide
     */
    public function asHide(): PdfActionNodeHide
    {
        if (!($this->value instanceof PdfActionNodeHide && $this->type === 'hide')) {
            throw new Exception(
                "Expected hide; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isResetForm(): bool
    {
        return $this->value instanceof PdfActionNodeResetForm && $this->type === 'reset-form';
    }

    /**
     * @return PdfActionNodeResetForm
     */
    public function asResetForm(): PdfActionNodeResetForm
    {
        if (!($this->value instanceof PdfActionNodeResetForm && $this->type === 'reset-form')) {
            throw new Exception(
                "Expected reset-form; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isGotoRemote(): bool
    {
        return $this->value instanceof PdfActionNodeGotoRemote && $this->type === 'goto-remote';
    }

    /**
     * @return PdfActionNodeGotoRemote
     */
    public function asGotoRemote(): PdfActionNodeGotoRemote
    {
        if (!($this->value instanceof PdfActionNodeGotoRemote && $this->type === 'goto-remote')) {
            throw new Exception(
                "Expected goto-remote; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isGotoEmbedded(): bool
    {
        return $this->value instanceof PdfActionNodeGotoEmbedded && $this->type === 'goto-embedded';
    }

    /**
     * @return PdfActionNodeGotoEmbedded
     */
    public function asGotoEmbedded(): PdfActionNodeGotoEmbedded
    {
        if (!($this->value instanceof PdfActionNodeGotoEmbedded && $this->type === 'goto-embedded')) {
            throw new Exception(
                "Expected goto-embedded; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isLaunch(): bool
    {
        return $this->value instanceof PdfActionNodeLaunch && $this->type === 'launch';
    }

    /**
     * @return PdfActionNodeLaunch
     */
    public function asLaunch(): PdfActionNodeLaunch
    {
        if (!($this->value instanceof PdfActionNodeLaunch && $this->type === 'launch')) {
            throw new Exception(
                "Expected launch; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isRendition(): bool
    {
        return $this->value instanceof PdfActionNodeRendition && $this->type === 'rendition';
    }

    /**
     * @return PdfActionNodeRendition
     */
    public function asRendition(): PdfActionNodeRendition
    {
        if (!($this->value instanceof PdfActionNodeRendition && $this->type === 'rendition')) {
            throw new Exception(
                "Expected rendition; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isSubmitForm(): bool
    {
        return $this->value instanceof PdfActionNodeSubmitForm && $this->type === 'submit-form';
    }

    /**
     * @return PdfActionNodeSubmitForm
     */
    public function asSubmitForm(): PdfActionNodeSubmitForm
    {
        if (!($this->value instanceof PdfActionNodeSubmitForm && $this->type === 'submit-form')) {
            throw new Exception(
                "Expected submit-form; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isThread(): bool
    {
        return $this->value instanceof PdfActionNodeThread && $this->type === 'thread';
    }

    /**
     * @return PdfActionNodeThread
     */
    public function asThread(): PdfActionNodeThread
    {
        if (!($this->value instanceof PdfActionNodeThread && $this->type === 'thread')) {
            throw new Exception(
                "Expected thread; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isSound(): bool
    {
        return $this->value instanceof PdfActionNodeSound && $this->type === 'sound';
    }

    /**
     * @return PdfActionNodeSound
     */
    public function asSound(): PdfActionNodeSound
    {
        if (!($this->value instanceof PdfActionNodeSound && $this->type === 'sound')) {
            throw new Exception(
                "Expected sound; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isMovie(): bool
    {
        return $this->value instanceof PdfActionNodeMovie && $this->type === 'movie';
    }

    /**
     * @return PdfActionNodeMovie
     */
    public function asMovie(): PdfActionNodeMovie
    {
        if (!($this->value instanceof PdfActionNodeMovie && $this->type === 'movie')) {
            throw new Exception(
                "Expected movie; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isImportData(): bool
    {
        return $this->value instanceof PdfActionNodeImportData && $this->type === 'import-data';
    }

    /**
     * @return PdfActionNodeImportData
     */
    public function asImportData(): PdfActionNodeImportData
    {
        if (!($this->value instanceof PdfActionNodeImportData && $this->type === 'import-data')) {
            throw new Exception(
                "Expected import-data; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isSetOcgState(): bool
    {
        return $this->value instanceof PdfActionNodeSetOcgState && $this->type === 'set-ocg-state';
    }

    /**
     * @return PdfActionNodeSetOcgState
     */
    public function asSetOcgState(): PdfActionNodeSetOcgState
    {
        if (!($this->value instanceof PdfActionNodeSetOcgState && $this->type === 'set-ocg-state')) {
            throw new Exception(
                "Expected set-ocg-state; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isTransition(): bool
    {
        return $this->value instanceof PdfActionNodeTransition && $this->type === 'transition';
    }

    /**
     * @return PdfActionNodeTransition
     */
    public function asTransition(): PdfActionNodeTransition
    {
        if (!($this->value instanceof PdfActionNodeTransition && $this->type === 'transition')) {
            throw new Exception(
                "Expected transition; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isGoto3DView(): bool
    {
        return $this->value instanceof PdfActionNodeGoto3DView && $this->type === 'goto-3d-view';
    }

    /**
     * @return PdfActionNodeGoto3DView
     */
    public function asGoto3DView(): PdfActionNodeGoto3DView
    {
        if (!($this->value instanceof PdfActionNodeGoto3DView && $this->type === 'goto-3d-view')) {
            throw new Exception(
                "Expected goto-3d-view; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isUnknown(): bool
    {
        return $this->value instanceof PdfActionNodeUnknown && $this->type === 'unknown';
    }

    /**
     * @return PdfActionNodeUnknown
     */
    public function asUnknown(): PdfActionNodeUnknown
    {
        if (!($this->value instanceof PdfActionNodeUnknown && $this->type === 'unknown')) {
            throw new Exception(
                "Expected unknown; got " . $this->type . " with value of type " . get_debug_type($this->value),
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
        $result['type'] = $this->type;

        $base = parent::jsonSerialize();
        $result = array_merge($base, $result);

        switch ($this->type) {
            case 'javascript':
                $value = $this->asJavascript()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'goto':
                $value = $this->asGoto_()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'uri':
                $value = $this->asUri()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'named':
                $value = $this->asNamed()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'hide':
                $value = $this->asHide()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'reset-form':
                $value = $this->asResetForm()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'goto-remote':
                $value = $this->asGotoRemote()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'goto-embedded':
                $value = $this->asGotoEmbedded()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'launch':
                $value = $this->asLaunch()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'rendition':
                $value = $this->asRendition()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'submit-form':
                $value = $this->asSubmitForm()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'thread':
                $value = $this->asThread()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'sound':
                $value = $this->asSound()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'movie':
                $value = $this->asMovie()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'import-data':
                $value = $this->asImportData()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'set-ocg-state':
                $value = $this->asSetOcgState()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'transition':
                $value = $this->asTransition()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'goto-3d-view':
                $value = $this->asGoto3DView()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'unknown':
                $value = $this->asUnknown()->jsonSerialize();
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
        if (!array_key_exists('type', $data)) {
            throw new Exception(
                "JSON data is missing property 'type'",
            );
        }
        $type = $data['type'];
        if (!(is_string($type))) {
            throw new Exception(
                "Expected property 'type' in JSON data to be string, instead received " . get_debug_type($data['type']),
            );
        }

        $args['type'] = $type;
        switch ($type) {
            case 'javascript':
                $args['value'] = PdfActionNodeJavascript::jsonDeserialize($data);
                break;
            case 'goto':
                $args['value'] = PdfActionNodeGoto::jsonDeserialize($data);
                break;
            case 'uri':
                $args['value'] = PdfActionNodeUri::jsonDeserialize($data);
                break;
            case 'named':
                $args['value'] = PdfActionNodeNamed::jsonDeserialize($data);
                break;
            case 'hide':
                $args['value'] = PdfActionNodeHide::jsonDeserialize($data);
                break;
            case 'reset-form':
                $args['value'] = PdfActionNodeResetForm::jsonDeserialize($data);
                break;
            case 'goto-remote':
                $args['value'] = PdfActionNodeGotoRemote::jsonDeserialize($data);
                break;
            case 'goto-embedded':
                $args['value'] = PdfActionNodeGotoEmbedded::jsonDeserialize($data);
                break;
            case 'launch':
                $args['value'] = PdfActionNodeLaunch::jsonDeserialize($data);
                break;
            case 'rendition':
                $args['value'] = PdfActionNodeRendition::jsonDeserialize($data);
                break;
            case 'submit-form':
                $args['value'] = PdfActionNodeSubmitForm::jsonDeserialize($data);
                break;
            case 'thread':
                $args['value'] = PdfActionNodeThread::jsonDeserialize($data);
                break;
            case 'sound':
                $args['value'] = PdfActionNodeSound::jsonDeserialize($data);
                break;
            case 'movie':
                $args['value'] = PdfActionNodeMovie::jsonDeserialize($data);
                break;
            case 'import-data':
                $args['value'] = PdfActionNodeImportData::jsonDeserialize($data);
                break;
            case 'set-ocg-state':
                $args['value'] = PdfActionNodeSetOcgState::jsonDeserialize($data);
                break;
            case 'transition':
                $args['value'] = PdfActionNodeTransition::jsonDeserialize($data);
                break;
            case 'goto-3d-view':
                $args['value'] = PdfActionNodeGoto3DView::jsonDeserialize($data);
                break;
            case 'unknown':
                $args['value'] = PdfActionNodeUnknown::jsonDeserialize($data);
                break;
            case '_unknown':
            default:
                $args['type'] = '_unknown';
                $args['value'] = $data;
        }

        // @phpstan-ignore-next-line
        return new static($args);
    }
}
