<?php


namespace frontend\controllers;


use common\repositories\NotFoundException;
use core\entities\User\User;
use yii\web\Controller;

class ProfileController extends Controller
{
    public function actionView($id)
    {
        $user = $this->findModel($id);
        return $this->render('view', [
            'user' => $user
        ]);
    }

    private function findModel($id)
    {
        $user = User::findOne($id);
        if(!isset($user))
            throw new NotFoundException('Пользователь не найден');
        return $user;
    }
}