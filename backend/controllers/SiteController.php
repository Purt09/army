<?php

namespace backend\controllers;

use core\entities\User\User;
use core\repositories\user\UserRepository;
use core\services\auth\AuthService;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use common\forms\auth\LoginForm;

/**
 * Site controller
 */
class SiteController extends Controller
{
    private $users;
    private $authService;

    public function __construct($id, $module, AuthService $authService, $config = [])
    {
        $this->users = new UserRepository();
        parent::__construct($id, $module, $config);
        $this->authService = $authService;
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $users = $this->users->getByRole(['cadet', 'officer']);
        return $this->render('index', [
            'users' => $users
        ]);
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $this->layout = 'main-login';
        $form = new LoginForm();
        if ($form->load(Yii::$app->request->post()) && $form->validate()) {
            try {
                $user = $this->authService->auth($form);
                Yii::$app->user->login($user, $form->rememberMe ? 3600 * 24 * 30 : 0);
                return $this->goBack();
            } catch (\DomainException $e) {
                Yii::$app->session->setFlash('error', $e->getMessage());
            }
        }
        return $this->render('login', [
            'model' => $form,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }
}