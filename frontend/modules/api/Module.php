<?php

namespace frontend\modules\api;

class Module extends \yii\base\Module
{
    public function init()
    {
        \Yii::$app->name = 'API';
        parent::init();
        $this->layout = 'main';
        \Yii::configure($this, require __DIR__ . '/config/main.php');

    }
}