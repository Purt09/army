<?php


namespace frontend\modules\department\controllers;


use backend\forms\user\SignupUserForm;
use backend\services\user\UserServices;
use bupy7\pages\models\Page;
use common\forms\auth\LoginForm;
use core\entities\Education\TimetableSearch;
use core\entities\News\News;
use core\entities\User\TblStaff;
use core\entities\User\User;
use core\repositories\news\NewsRepository;
use core\entities\News\NewsSearch;
use core\entities\News\NewsPublications;
use core\helpers\user\RbacHelpers;
use core\services\auth\AuthService;
use frontend\modules\department\useCases\NewsService;
use Yii;
use yii\data\ArrayDataProvider;
use yii\filters\AccessControl;
use yii\helpers\Url;
use yii\web\Controller;

class FiveFreeController extends Controller
{
    use TimeTableTrait;

    const UNIT_ID = 30;

    private $newsService;
    private $news;
    private $authService;

    public function __construct($id, $module, $config = [])
    {
        $this->news = new NewsRepository();
        $this->newsService = new NewsService();
        $this->authService = new AuthService();
        parent::__construct($id, $module, $config);
    }

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'except' => ['index', 'ymb', 'immortal-regiment-view', 'view-graduate' ],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['admin'],
                    ],
                    [
                        'allow' => true,
                        'matchCallback' => function ($rule, $action) {
                            return RbacHelpers::checkRole(RbacHelpers::$CAFEDRA53) && RbacHelpers::checkRole(RbacHelpers::$MANAGER);
                        }
                    ],
                ],
            ],
        ];
    }


    public function actionIndex()
    {
        $content = Page::find()->where(['alias' => 'main_53kaf'])->one();
        $history = Page::find()->where(['alias' => 'history_53kaf'])->one();
        $main = Page::find()->where(['alias' => 'main_53kaf_general'])->one();

        $news = $this->news->getNewsByType('53_cafedra')->all();
        $users = RbacHelpers::getByTwoRole(RbacHelpers::$CAFEDRA53, RbacHelpers::$MANAGER);

        return $this->render('index', [
            'news' => $news,
            'content' => $content,
            'history' => $history,
            'main' => $main,
            'users' => $users
        ]);
    }

    public function actionCreateNews()
    {
        $model = new News();
        $publications = new NewsPublications();

        if ($model->load(Yii::$app->request->post()) && $publications->load(Yii::$app->request->post())) {
            $this->newsService->createNews($model, $publications);
            Yii::$app->session->setFlash('success', 'Новость опубликована');
            return $this->redirect(['index']);
        }

        return $this->render('create-news', [
            'model' => $model,
            'publications' => $publications
        ]);
    }

    public function actionManager()
    {
        $newsPublications = NewsPublications::find()->where(['53_cafedra' => true])->with('articles')->all();
        return $this->render('manager', [
            'newsPublications' => $newsPublications
        ]);
    }

    public function actionMain()
    {
        $model = Page::find()->where(['alias' => 'main_53kaf'])->one();

        if ($model->load(Yii::$app->request->post())) {
            $model->save();
            Yii::$app->session->setFlash('success', 'Сохранено');
            return $this->redirect(['index']);
        }

        return $this->render('main', [
            'model' => $model,
            'title' => 'Управление главной 53 кафедры'
        ]);
    }

    public function actionHistory()
    {
        $model = Page::find()->where(['alias' => 'history_53kaf'])->one();

        if ($model->load(Yii::$app->request->post())) {
            $model->save();

            Yii::$app->session->setFlash('success', 'Сохранено');
            return $this->redirect(['index']);
        }

        return $this->render('main', [
            'model' => $model,
            'title' => 'Управление историей 53 кафедры'
        ]);
    }


    public function actionGraduate()
    {
        $model = Page::find()->where(['alias' => 'department_53kaf'])->one();

        if ($model->load(Yii::$app->request->post())) {
            $model->save();

            Yii::$app->session->setFlash('success', 'Сохранено');
            return $this->redirect(['index']);
        }

        return $this->render('main', [
            'model' => $model,
            'title' => 'Управление выпускиниками 53 кафедры'
        ]);
    }

    public function actionImmortalRegimentView()
    {
        $model = Page::find()->where(['alias' => 'immortal_regiment_53kaf'])->one();

        return $this->render('../common/immortal-regiment', [
            'model' => $model,
            'title' => 'Бессмертный полк 53 кафедры'
        ]);
    }

    public function actionImmortalRegiment()
    {
        $model = Page::find()->where(['alias' => 'immortal_regiment_53kaf'])->one();

        if ($model->load(Yii::$app->request->post())) {
            $model->save();

            Yii::$app->session->setFlash('success', 'Сохранено');
            return $this->redirect(['index']);
        }

        return $this->render('../common/_form_main', [
            'model' => $model,
            'title' => 'Управление бессмертным полком 53 кафедры'
        ]);
    }

    public function actionViewGraduate()
    {
        $model = Page::find()->where(['alias' => 'department_53kaf'])->one();


        return $this->render('view-graduate', [
            'model' => $model,
        ]);
    }

    public function actionGeneral()
    {
        $model = Page::find()->where(['alias' => 'main_53kaf_general'])->one();

        if ($model->load(Yii::$app->request->post())) {
            $model->save();
            Yii::$app->session->setFlash('success', 'Сохранено');
            return $this->redirect(['index']);
        }

        return $this->render('main', [
            'model' => $model,
            'title' => 'Управление главной 53 кафедры(общее)'
        ]);
    }

    public function actionNews()
    {
        $searchModel = new NewsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams, '53_cafedra');

        return $this->render('news', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionUsers()
    {
        $users = RbacHelpers::getByTwoRole(RbacHelpers::$CAFEDRA53, RbacHelpers::$OFFICER);

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
            'title' => 'Управление пользователями 53 кафедра',
            'controller' => 'five-free',
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


                RbacHelpers::setRoleUser(RbacHelpers::$OFFICER,$user);
                RbacHelpers::setRoleUser(RbacHelpers::$CAFEDRA53,$user);
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

    public function actionYmb()
    {
        return $this->render('YMB', [
        ]);
    }

}
