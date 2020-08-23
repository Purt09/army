<?php


namespace frontend\modules\courses\controllers;


use backend\forms\user\SignupUserForm;
use backend\services\user\UserServices;
use bupy7\pages\models\Page;
use common\forms\auth\LoginForm;
use core\entities\News\NewsPublications;
use core\entities\User\TblStaff;
use core\entities\User\User;
use core\helpers\user\RbacHelpers;
use core\repositories\news\NewsRepository;
use core\services\api\UserApiService;
use core\services\auth\AuthService;
use frontend\modules\department\useCases\NewsService;
use Yii;
use yii\data\ArrayDataProvider;
use yii\filters\AccessControl;
use yii\helpers\Url;
use yii\web\Controller;

class CourseTwoController extends Controller
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
                        'roles' => ['course52', 'admin'],
                    ],
                ],
            ],
        ];
    }


    private $newsService;
    private $news;
    private $authService;
    private $service;
    private $serviceAPI;

    public function __construct($id, $module, $config = [])
    {
        $this->news = new NewsRepository();
        $this->newsService = new NewsService();
        $this->authService = new AuthService();
        $this->serviceAPI = new UserApiService();
        $this->service = new UserServices();
        parent::__construct($id, $module, $config);
    }

    public function actionIndex()
    {

        $content = Page::find()->where(['alias' => 'main_52course'])->one();

        $news = NewsPublications::find()->where(['course52' => 1])->with('articles')->orderBy('id desc')->all();

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
        $users = User::find()->where(['id' => $users])->select('user_base_id')->asArray()->all();
        $result = [];
        foreach ($users as $user)
            array_push($result, $user['user_base_id']);
        $users = TblStaff::find()->where(['id' => $result])->with('currentMilRank')->all();

        $provider = new ArrayDataProvider([
            'allModels' => $users,
            'sort' => [
                'attributes' => ['id', 'fio', 'mobile_phone', 'birthday_date'],
            ],
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);
        return $this->render('users', [
            'title' => 'Управление пользователями 52 курса',
            'controller' => 'course-two',
            'provider' => $provider
        ]);
    }

    public function actionAddUser()
    {
        $model = new LoginForm();

        if ($model->load(\Yii::$app->request->post()) && $model->validate()) {
            try {
                $user = $this->authService->auth($model);
                if($user == null){
                    $user = $this->authService->checkMoodle($model);
                }


                RbacHelpers::setRoleUser(RbacHelpers::$CADET,$user);
                RbacHelpers::setRoleUser(RbacHelpers::$COURSE52,$user);
                return $this->redirect(Url::to('users'));
            } catch (\DomainException $e) {
                \Yii::$app->errorHandler->logException($e);
                \Yii::$app->session->setFlash('error', $e->getMessage());
            }
        }
        return $this->render('add-user', [
            'model' => $model
        ]);
    }

    public function actionEditMainPage()
    {
        $model = Page::find()->where(['alias' => 'main_52course'])->one();

        if ($model->load(Yii::$app->request->post())) {
            $model->save();
            Yii::$app->session->setFlash('success', 'Сохранено');
            return $this->redirect(['index']);
        }

        return $this->render('main', [
            'model' => $model,
            'title' => 'Управление главной 52 курса'
        ]);
    }
}
