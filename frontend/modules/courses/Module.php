<?php


namespace frontend\modules\courses;


class Module extends \yii\base\Module
{
    public function init()
    {
        \Yii::$app->name = 'Управление курсом';
        $this->layout = 'main';
        parent::init();
        \Yii::configure($this, require __DIR__ . '/config/main.php');
    }
}