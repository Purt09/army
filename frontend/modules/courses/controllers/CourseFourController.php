<?php


namespace frontend\modules\courses\controllers;


use backend\forms\user\SignupUserForm;
use backend\services\user\UserServices;
use core\helpers\user\RbacHelpers;
use yii\filters\AccessControl;
use yii\web\Controller;

class CourseFourController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['course54', 'admin'],
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

        return $this->render('index');
    }


    public function actionCreateCadet()
    {
        $model = new SignupUserForm();


        if ($model->load(\Yii::$app->request->post())) {
            try {
                $user = $this->service->signup($model);
                RbacHelpers::setRoleUser(RbacHelpers::$CADET, $user);
                RbacHelpers::setRoleUser(RbacHelpers::$COURSE54, $user);
            } catch (\Exception $e) {
                \Yii::$app->session->setFlash('warning', $e->getMessage());
            }
            return $this->redirect(['course-four', 'id' => $user->id]);
        }

        return $this->render('create-cadet', [
            'model' => $model
        ]);
    }

}