<?php


namespace frontend\modules\department\controllers;


use bupy7\pages\models\Page;
use common\forms\auth\LoginForm;
use core\entities\News\News;
use core\entities\News\NewsPublications;
use core\entities\News\NewsSearch;
use core\entities\User\TblStaff;
use core\entities\User\User;
use core\repositories\news\NewsRepository;
use core\helpers\user\RbacHelpers;
use core\services\auth\AuthService;
use frontend\modules\department\useCases\NewsService;
use yii\data\ArrayDataProvider;
use yii\filters\AccessControl;
use yii\helpers\Url;
use yii\web\Controller;
use Yii;

class CommonController extends Controller
{

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
                'except' => ['index'],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['admin'],
                    ],
                    [
                        'allow' => true,
                        'matchCallback' => function ($rule, $action) {
                            return RbacHelpers::checkRole(RbacHelpers::$MANAGER);
                        }
                    ],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $model = Page::find()->where(['alias' => 'main_fak_general'])->one();
        $content = Page::find()->where(['alias' => 'main'])->one();
        $history = Page::find()->where(['alias' => 'history-main'])->one();

        $news = NewsPublications::find()->where(['main' => 1])->with('articles')->all();

        return $this->render('index', [
            'content' => $content,
            'history' => $history,
            'news' => $news,
            'model' => $model
        ]);
    }

    public function actionNews()
    {
        $searchModel = new NewsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('news', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }



    public function actionManager()
    {
        $newsPublications = NewsPublications::find()->where(['main' => true])->with('articles')->all();
        return $this->render('manager', [
            'newsPublications' => $newsPublications,
            'controller' => 'common',
            'title' => 'факультетом'
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

        return $this->render('_form_news', [
            'model' => $model,
            'publications' => $publications
        ]);
    }



    public function actionMain()
    {
        $model = Page::find()->where(['alias' => 'main'])->one();

        if ($model->load(Yii::$app->request->post())) {
            $model->save();
            Yii::$app->session->setFlash('success', 'Сохранено');
            return $this->redirect(['index']);
        }

        return $this->render('_form_main', [
            'model' => $model,
            'title' => 'Управление главной факультета'
        ]);
    }

    public function actionGraduate()
    {
        $model = Page::find()->where(['alias' => 'department_main'])->one();

        if ($model->load(Yii::$app->request->post())) {
            $model->save();

            Yii::$app->session->setFlash('success', 'Сохранено');
            return $this->redirect(['index']);
        }

        return $this->render('_form_main', [
            'model' => $model,
            'title' => 'Управление выпускиниками факультета'
        ]);
    }

    public function actionHistory()
    {
        $model = Page::find()->where(['alias' => 'history-main'])->one();

        if ($model->load(Yii::$app->request->post())) {
            $model->save();

            Yii::$app->session->setFlash('success', 'Сохранено');
            return $this->redirect(['index']);
        }

        return $this->render('_form_main', [
            'model' => $model,
            'title' => 'Управление историей факультета'
        ]);
    }

    public function actionViewGraduate()
    {


        return $this->render('view-graduate', [
        ]);
    }

    public function actionViewGraduateStars()
    {
        $model = Page::find()->where(['alias' => 'department_main'])->one();


        return $this->render('view-graduate-start', [
            'model' => $model,
        ]);
    }

    public function actionContactInfo()
    {
        $model = Page::find()->where(['alias' => 'contacts-info'])->one();

        if ($model->load(Yii::$app->request->post())) {
            $model->save();

            Yii::$app->session->setFlash('success', 'Сохранено');
            return $this->redirect(['index']);
        }

        return $this->render('_form_main', [
            'model' => $model,
            'title' => 'Управление страницей контактов факультета'
        ]);
    }

    public function actionContactAbonent()
    {
        $model = Page::find()->where(['alias' => 'contacts-abonent'])->one();

        if ($model->load(Yii::$app->request->post())) {
            $model->save();

            Yii::$app->session->setFlash('success', 'Сохранено');
            return $this->redirect(['index']);
        }

        return $this->render('_form_main', [
            'model' => $model,
            'title' => 'Управление списком терминалов'
        ]);
    }

    public function actionGeneral()
    {
        $model = Page::find()->where(['alias' => 'main_fak_general'])->one();

        if ($model->load(Yii::$app->request->post())) {
            $model->save();

            Yii::$app->session->setFlash('success', 'Сохранено');
            return $this->redirect(['index']);
        }

        return $this->render('_form_main', [
            'model' => $model,
            'title' => 'Управление главной страницей управления'
        ]);
    }

    public function actionUsers()
    {
        $users1 = \Yii::$app->authManager->getUserIdsByRole(RbacHelpers::$FAKULTET);
        $users2 = \Yii::$app->authManager->getUserIdsByRole(RbacHelpers::$OFFICER);
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
            'title' => 'Управление пользователями факультета',
            'controller' => 'common',
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
                RbacHelpers::setRoleUser(RbacHelpers::$FAKULTET,$user);
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
}
