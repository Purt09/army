<?php


namespace frontend\modules\courses\controllers;


use backend\forms\user\SignupUserForm;
use backend\services\user\UserServices;
use core\vendor\pages\models\Page;
use common\forms\auth\LoginForm;
use core\entities\News\NewsPublications;
use core\entities\News\NewsSearch;
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

class CourseFourController extends Controller
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
                        'roles' => ['course54', 'admin'],
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

        $content = Page::find()->where(['alias' => 'main_54course'])->one();

        $news = NewsPublications::find()->where(['course54' => 1])->with('articles')->orderBy('id desc')->all();
        $users = RbacHelpers::getByTwoRole(RbacHelpers::$COURSE54, RbacHelpers::$COURSE_MAIN);

        return $this->render('index', [
            'content' => $content,
            'news' => $news,
            'users' => $users
        ]);
    }

    public function actionNews()
    {
        $searchModel = new NewsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams, 'course54');

        return $this->render('news', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionUsers()
    {
        $users = RbacHelpers::getByTwoRole(RbacHelpers::$COURSE54, RbacHelpers::$CADET);

        $fio = Yii::$app->request->post('fio');
        if(!is_null($fio) & !empty($fio)) {
            foreach ($users as $key => $user)
                if(strripos($user->fio, $fio) === false)
                    unset($users[$key]);

        }

        $provider = new ArrayDataProvider([
            'allModels' => $users,
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);
        return $this->render('users', [
            'title' => 'Управление пользователями 54 курса',
            'controller' => 'course-four',
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
                RbacHelpers::setRoleUser(RbacHelpers::$COURSE54,$user);
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
        $model = Page::find()->where(['alias' => 'main_54course'])->one();

        if ($model->load(Yii::$app->request->post())) {
            $model->save();
            Yii::$app->session->setFlash('success', 'Сохранено');
            return $this->redirect(['index']);
        }

        return $this->render('main', [
            'model' => $model,
            'title' => 'Управление главной 54 курса'
        ]);
    }

}
