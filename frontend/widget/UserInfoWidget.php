<?php


namespace frontend\widget;


use yii\base\Widget;
use Yii;

class UserInfoWidget extends Widget
{
    public $user;

    public function run()
    {

        return $this->render('user-info', [
            'user' => $this->user
        ]);
    }
}