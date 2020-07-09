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
        /**
        $username = 'test11234';
        $password = 'Fas123456!';
        $email = 'ne123w@email.ru';
        $user = User::requestSignup($username,$email,$password);
        $user->id = 3;
        $user->save();
        echo $this->service->createUser($username,$password,$email);*/
        return $this->render('index');
    }
}