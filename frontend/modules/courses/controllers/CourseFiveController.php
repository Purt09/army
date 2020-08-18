<?php


namespace frontend\modules\courses\controllers;


use backend\forms\user\SignupUserForm;
use backend\services\user\UserServices;
use bupy7\pages\models\Page;
use core\entities\News\NewsPublications;
use core\entities\User\User;
use core\helpers\user\RbacHelpers;
use core\services\api\UserApiService;
use yii\filters\AccessControl;
use yii\web\Controller;

class CourseFiveController extends Controller
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
                        'roles' => ['course55', 'admin'],
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

        $content = Page::find()->where(['alias' => 'main_55course'])->one();

        $news = NewsPublications::find()->where(['course55' => 1])->with('articles')->all();

        return $this->render('index', [
            'content' => $content,
            'news' => $news,
        ]);
    }

    public function actionUsers()
    {
        $users1 = \Yii::$app->authManager->getUserIdsByRole(RbacHelpers::$COURSE55);
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
            try {
                $user = $this->service->signup($model);
                RbacHelpers::setRoleUser(RbacHelpers::$CADET, $user);
                RbacHelpers::setRoleUser(RbacHelpers::$COURSE55, $user);
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