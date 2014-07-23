<?php
/**
 * Created by PhpStorm.
 * User: zein
 * Date: 7/9/14
 * Time: 10:01 PM
 */

namespace trntv\aceeditor;

use yii\web\AssetBundle;

class AceEditorAsset extends AssetBundle{
    /**
     * @inheritdoc
     */
    public function init(){
        $this->sourcePath = __DIR__.'/assets/ace-builds/src-min-noconflict';
        parent::init();
    }

    /**
     * @inheritdoc
     */
    public $js = [
        'ace.js'
    ];

} 