<?php

namespace yii\pickadate;

class PickadateAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/filsh/pickadate.js';

    public $js = [
        '_raw/lib/picker.js',
        '_raw/lib/picker.date.js'
    ];
    
    public $css = [
        '_raw/lib/themes/_default.date.less'
    ];
    
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}