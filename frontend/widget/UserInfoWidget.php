<?php


namespace frontend\widget;


use yii\base\Widget;
use Yii;

class UserInfoWidget extends Widget
{
    public $user = 'Факультет сбора и обработки информации';

    public function run()
    {

        return $this->render('user-info', [
            'user' => $this->user
        ]);
    }
}