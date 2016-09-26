<?php

namespace trntv\aceeditor;

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\InputWidget;

/**
 * Class AceEditor
 * @package trntv\aceeditor
 * @author Eugene Terentev <eugene@terentev.net>
 */
class AceEditor extends InputWidget
{
    /**
     * @var string Programming Language Mode
     */
    public $mode = 'html';

    /**
     * @var string Editor theme
     * $see Themes List
     * @link https://github.com/ajaxorg/ace/tree/master/lib/ace/theme
     */
    public $theme = 'github';

    /**
     * @var array Div options
     */
    public $containerOptions = [
        'style' => 'width: 100%; min-height: 400px'
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        AceEditorAsset::register($this->getView());
        $editor_id = $this->getId();
        $editor_var = 'aceeditor_' . $editor_id;
        $this->getView()->registerJs("var {$editor_var} = ace.edit(\"{$editor_id}\")");
        $this->getView()->registerJs("{$editor_var}.setTheme(\"ace/theme/{$this->theme}\")");
        $this->getView()->registerJs("{$editor_var}.getSession().setMode(\"ace/mode/{$this->mode}\")");

        $textarea_var = 'acetextarea_' . $editor_id;
        $this->getView()->registerJs("
            var {$textarea_var} = $('#{$this->options['id']}').hide();
            {$editor_var}.getSession().setValue({$textarea_var}.val());
            {$editor_var}.getSession().on('change', function(){
                {$textarea_var}.val({$editor_var}.getSession().getValue());
            });
        ");
        Html::addCssStyle($this->options, 'display: none');
        $this->containerOptions['id'] = $editor_id;
        $this->getView()->registerCss("#{$editor_id}{position:relative}");
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        $content = Html::tag('div', '', $this->containerOptions);
        if ($this->hasModel()) {
            $content .= Html::activeTextarea($this->model, $this->attribute, $this->options);
        } else {
            $content .= Html::textarea($this->name, $this->value, $this->options);
        }
        return $content;
    }
}