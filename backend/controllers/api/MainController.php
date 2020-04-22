<?php

namespace backend\controllers\api;

use core\entities\User\User;
use core\services\api\UserApiService;

class MainController extends \yii\web\Controller
{
    private $service;

    public function __construct($id, $module, $config = [])
    {
        $this->service = new UserApiService();
        parent::__construct($id, $module, $config);
    }

    public function actionIndex()
    {
        $username = 'test1';
        $password = 'Fas123456!';
        $email = 'new@email.ru';
        $user = User::requestSignup($username,$email,$password);
        $user->save();
        echo $this->service->createUser($username,$password,$email);
        return $this->render('index');
    }
}