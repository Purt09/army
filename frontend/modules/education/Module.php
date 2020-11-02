<?php

namespace frontend\modules\education;

class Module extends \yii\base\Module
{
    public function init()
    {
        \Yii::$app->name = 'Образовательная деятельность';
        parent::init();
        $this->layout = 'main';
        \Yii::configure($this, require __DIR__ . '/config/main.php');

    }
}