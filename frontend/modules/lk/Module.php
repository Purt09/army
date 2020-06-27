<?php

namespace frontend\modules\lk;

class Module extends \yii\base\Module
{
    public function init()
    {
        \Yii::$app->name = 'Личный кабинет';
        parent::init();
        $this->layout = 'main';
        \Yii::configure($this, require __DIR__ . '/config/main.php');

    }
}