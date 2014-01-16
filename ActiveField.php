<?php

namespace yii\pickadate;

use yii\helpers\Html;

class ActiveField extends \yii\widgets\ActiveField
{
    public function pickadateInput($options = [])
    {
        PickadateAsset::register($this->form->getView());
        $this->registerScript(!empty($options['clientOptions']) ? $options['clientOptions'] : []);
        return parent::textInput();
    }
    
    protected function registerScript($options = [])
    {
        $configure = !empty($options) ? Json::encode($options) : '';
        if (!isset($options['id'])) {
            $options['id'] = Html::getInputId($this->model, $this->attribute);
        }
        $this->form->getView()->registerJs("jQuery('#{$options['id']}').pickadate($configure);");
    }
}