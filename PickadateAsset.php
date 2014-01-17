<?php

namespace yii\pickadate;

use \Yii;

class PickadateAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/filsh/pickadate.js';

    public $js = [
        '_raw/lib/picker.js',
        '_raw/lib/picker.date.js'
    ];
    
    public $css = [
        '_raw/lib/themes/base.less',
        '_raw/lib/themes/base.date.less',
        '_raw/lib/themes/default.less',
        '_raw/lib/themes/default.date.less'
    ];
    
    public $depends = [
        'yii\web\JqueryAsset'
    ];
    
    /**
     * Map language to country codes
     * @var type 
     */
    protected $translationsMap = [
        'ru' => 'ru_RU',
        'uk' => 'uk_UA',
    ];
    
    public function init()
    {
        $language = str_replace('-', '_', strtolower(Yii::$app->language));
        
        if(strpos($language, '_') !== false) {
            $language = explode('_', $language)[0];
        }
        
        if(isset($this->translationsMap[$language])) {
            $this->js[] = '_raw/lib/translations/'. $this->translationsMap[$language] .'.js';
        }
        
        parent::init();
    }
}