<?php


namespace frontend\modules\lk\controllers;


use common\forms\auth\LoginForm;
use core\services\auth\AuthService;
use yii\helpers\Url;
use yii\web\Controller;

class AuthController extends Controller
{
    private $service;

    public function __construct($id, $module, AuthService $service,$config = [])
    {
        parent::__construct($id, $module, $config);
        $this->service = $service;
    }

    /**
     * @return mixed
     */
    public function actionLogin()
    {
        $this->layout = 'main-login';
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $form = new LoginForm();
        if ($form->load(\Yii::$app->request->post()) && $form->validate()) {
            try {
                $user = $this->service->auth($form);
                if(!isset($user))
                    $user = $this->service->checkMoodle($form);

                \Yii::$app->user->login($user, $form->rememberMe ? \Yii::$app->params['user.rememberMeDuration'] : 0);
                return $this->redirect(Url::to('/'));
            } catch (\DomainException $e) {
                \Yii::$app->errorHandler->logException($e);
                \Yii::$app->session->setFlash('error', $e->getMessage());
            }
        }
        return $this->render('login', [
            'model' => $form,
        ]);
    }

    /**
     * @return mixed
     */
    public function actionLogout()
    {
        \Yii::$app->user->logout();
        return $this->goHome();
    }

}