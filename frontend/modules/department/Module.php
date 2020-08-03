<?php


namespace frontend\modules\department;


class Module extends \yii\base\Module
{
    public function init()
    {
        $this->layout = 'main';
        \Yii::$app->name = 'Управление кафедрой';
        parent::init();
        \Yii::configure($this, require __DIR__ . '/config/main.php');
    }
}