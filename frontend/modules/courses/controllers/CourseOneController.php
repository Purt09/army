<?php


namespace frontend\modules\courses\controllers;


use backend\forms\user\SignupUserForm;
use backend\services\user\UserServices;
use bupy7\pages\models\Page;
use core\entities\News\NewsPublications;
use core\entities\User\TblStaff;
use core\entities\User\User;
use core\helpers\user\RbacHelpers;
use core\services\api\UserApiService;
use yii\filters\AccessControl;
use yii\web\Controller;

class CourseOneController extends Controller
{
    use CommonTraits;

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'except' => ['index'],
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

        $content = Page::find()->where(['alias' => 'main_51course'])->one();

        $news = NewsPublications::find()->where(['course51' => 1])->with('articles')->orderBy('id desc')->all();

        return $this->render('index', [
            'content' => $content,
            'news' => $news,
        ]);
    }

    public function actionUsers()
    {
        $users1 = \Yii::$app->authManager->getUserIdsByRole(RbacHelpers::$COURSE51);
        $users2 = \Yii::$app->authManager->getUserIdsByRole(RbacHelpers::$CADET);
        $users = array_intersect($users1, $users2);
        $users = User::find()->where(['id' => $users])->all();
        return $this->render('users', [
            'users' => $users
        ]);
    }


    public function actionCreateCadet()
    {
        $model = new SignupUserForm();


        if ($model->load(\Yii::$app->request->post())) {
            $user = $this->service->signup($model);
//            $user = User::requestSignup(
//                $model->username,
//                $model->password
//            );
//            $staff = TblStaff::create(
//                $model->firstName,
//                $model->lastName,
//                $model->sirName,
//                $model->passport,
//                $model->mobile_phone,
//                $model->address,
//                $model->birthday_date,
//                $model->udl_number
//            );
//            vardump($staff->save());
////            if(!$staff->save())
////                throw new \RuntimeException('Данные не были сохранены. Пробуйте изменить данные(база)');
//            $user->user_base_id = $staff->id;
//            if($model->moodle_id == 0) {
//                $user->user_moodle_id = 2;
////                if(!$user->save())
////                    throw new \RuntimeException('Данные не были сохранены. Пробуйте изменить данные(yii)');
//                $user_id = $this->serviceAPI->createUser(
//                    $model->username,
//                    $model->email,
//                    $model->password,
//                    $model->firstName,
//                    $model->lastName
//                );
//                vardump($user_id);
////                throw new \RuntimeException('STOP' . $user_id[0]['id']);
////                if(!is_int($user_id[0]['id']))
////                    throw new \RuntimeException('Данные не были отправлены на мудл. Пробуйте изменить данные(moodle)');
//                $user->user_moodle_id = 1;
//                vardump($user->save());
//                vardump($user);
//            } else
//                $user->user_moodle_id = $model->moodle_id;
//            $user->save();
            return $this->redirect('/profile/'. $user->id);
        }

        return $this->render('create-cadet', [
            'model' => $model
        ]);
    }

}
