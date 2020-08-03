<?php


namespace frontend\modules\courses\controllers;


use backend\forms\user\SignupUserForm;
use backend\services\user\UserServices;
use core\entities\User\User;
use core\helpers\user\RbacHelpers;
use yii\filters\AccessControl;
use yii\web\Controller;

class CourseFreeController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['course53', 'admin'],
                    ],
                ],
            ],
        ];
    }
    private $service;
    public function __construct($id, $module, $config = [])
    {
        $this->service = new UserServices();
        parent::__construct($id, $module, $config);
    }

    public function actionIndex()
    {
        $users1 = \Yii::$app->authManager->getUserIdsByRole(RbacHelpers::$COURSE53);
        $users2 = \Yii::$app->authManager->getUserIdsByRole(RbacHelpers::$CADET);
        $users = array_intersect($users1, $users2);
        $users = User::find()->where(['id' => $users])->all();
        return $this->render('index', [
            'users' => $users
        ]);
    }


    public function actionCreateCadet()
    {
        $model = new SignupUserForm();


        if ($model->load(\Yii::$app->request->post())) {
            try {
                $user = $this->service->signup($model);
                RbacHelpers::setRoleUser(RbacHelpers::$CADET, $user);
                RbacHelpers::setRoleUser(RbacHelpers::$COURSE53, $user);
            } catch (\Exception $e) {
                \Yii::$app->session->setFlash('warning', $e->getMessage());
            }
            return $this->redirect('/profile/'. $user->id);
        }

        return $this->render('create-cadet', [
            'model' => $model
        ]);
    }

}