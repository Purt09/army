<?php


namespace frontend\modules\courses\controllers;


use backend\forms\user\SignupUserForm;
use backend\services\user\UserServices;
use core\entities\User\TblStaff;
use core\entities\User\User;
use core\helpers\user\RbacHelpers;
use core\services\api\UserApiService;
use yii\filters\AccessControl;
use yii\web\Controller;

class CourseOneController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['course51', 'admin'],
                    ],
                ],
            ],
        ];
    }

    private $service;
    private $serviceAPI;

    public function __construct($id, $module, $config = [])
    {
        $this->serviceAPI = new UserApiService();
        $this->service = new UserServices();
        parent::__construct($id, $module, $config);
    }

    public function actionIndex()
    {
        $users1 = \Yii::$app->authManager->getUserIdsByRole(RbacHelpers::$COURSE51);
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
            $user = User::requestSignup(
                $model->username,
                $model->password
            );
            $staff = TblStaff::create(
                $model->firstName,
                $model->lastName,
                $model->sirName,
                $model->passport,
                $model->mobile_phone,
                $model->address,
                $model->birthday_date,
                $model->udl_number
            );
            vardump($staff->save());
            vardump($staff);
            if(!$staff->save())
                throw new \RuntimeException('Данные не были сохранены. Пробуйте изменить данные(база)');
            $user->user_base_id = $staff->id;
            if($model->moodle_id == 0) {
                $user->user_moodle_id = 2;
//                if(!$user->save())
//                    throw new \RuntimeException('Данные не были сохранены. Пробуйте изменить данные(yii)');
                $user_id = $this->serviceAPI->createUser(
                    $model->username,
                    $model->email,
                    $model->password,
                    $model->firstName,
                    $model->lastName
                );
                vardump($user_id);
                if(!is_int($user_id[0]['id']))
                    throw new \RuntimeException('Данные не были отправлены на мудл. Пробуйте изменить данные(moodle)');
                $user->user_moodle_id = $user_id[0]['id'];
                vardump($user->save());
                vardump($user);
            } else
                $user->user_moodle_id = $model->moodle_id;
            $user->save();
            return $this->redirect('/profile/'. $user->id);
        }

        return $this->render('create-cadet', [
            'model' => $model
        ]);
    }

}