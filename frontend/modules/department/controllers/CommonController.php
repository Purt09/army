<?php


namespace frontend\modules\department\controllers;


use core\vendor\pages\models\Page;
use common\forms\auth\LoginForm;
use core\entities\Army\Plan;
use core\entities\Education\Timetable;
use core\entities\News\News;
use core\entities\News\NewsPublications;
use core\entities\News\NewsSearch;
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
    use CommonTimeTableTrait;
    use CommonSubjectTrait;
    use CommonEvaluationTrait;
    use ArticleTrait;
    use GraduatesTrait;
    use RegimentTrait;

    const UNIT_ID = 1;

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

    public function actions()
    {
        return [
            'file-upload-time' => [
                'class' => \pantera\media\actions\kartik\MediaUploadActionKartik::className(),
                'model' => function () {
                    if (Yii::$app->request->get('id')) {
                        return Timetable::findOne(Yii::$app->request->get('id'));
                    } else {
                        return new Test();
                    }
                }
            ],
            'file-delete-time' => [
                'class' => \pantera\media\actions\kartik\MediaDeleteActionKartik::className(),
                'model' => function () {
                    return \pantera\media\models\Media::findOne(Yii::$app->request->get('id'));
                }
            ],
            'file-sort-time' => [
                'class' => \pantera\media\actions\kartik\MediaSortActionKartik::className(),
                'model' => function () {
                    return Timetable::findOne(Yii::$app->request->get('id'));
                }
            ],


            'file-upload-plan' => [
                'class' => \pantera\media\actions\kartik\MediaUploadActionKartik::className(),
                'model' => function () {
                    if (Yii::$app->request->get('id')) {
                        return Plan::findOne(Yii::$app->request->get('id'));
                    } else {
                        return new Test();
                    }
                }
            ],
            'file-delete-plan' => [
                'class' => \pantera\media\actions\kartik\MediaDeleteActionKartik::className(),
                'model' => function () {
                    return \pantera\media\models\Media::findOne(Yii::$app->request->get('id'));
                }
            ],
            'file-sort-plan' => [
                'class' => \pantera\media\actions\kartik\MediaSortActionKartik::className(),
                'model' => function () {
                    return Plan::findOne(Yii::$app->request->get('id'));
                }
            ],
        ];
    }

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'except' => ['index', 'ymb', 'immortal-regiment-view', 'view-plan', 'users'],
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
        $history = Page::find()->where(['alias' => 'history-main'])->one();

        $news = $this->news->getNewsByType('main')->all();
        $users = RbacHelpers::getByTwoRole(RbacHelpers::$MANAGER, RbacHelpers::$FAKULTET);

        return $this->render('index', [
            'news' => $news,
            'model' => $model,
            'users' => $users,
            'history' => $history
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
            'unit_id' => self::UNIT_ID,
            'controller' => 'common',
            'title' => 'факультетом'
        ]);
    }



    public function actionCreateNews()
    {
        $model = new News();
        $publications = new NewsPublications();

        if ($model->load(Yii::$app->request->post()) && $publications->load(Yii::$app->request->post())) {
          try {
                          $this->newsService->createNews($model, $publications);
                          Yii::$app->session->setFlash('success', 'Новость опубликована');
                      } catch (\RuntimeException $e) {
                          Yii::$app->session->setFlash('error', $e->getMessage());
                      }
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

    public function actionImmortalRegimentView()
    {
        $model = Page::find()->where(['alias' => 'immortal_regiment_main'])->one();

        return $this->render('immortal-regiment', [
            'model' => $model,
            'title' => 'Бессмертный полк факультета'
        ]);
    }

    public function actionImmortalRegiment()
    {
        $model = Page::find()->where(['alias' => 'immortal_regiment_main'])->one();

        if ($model->load(Yii::$app->request->post())) {
            $model->save();

            Yii::$app->session->setFlash('success', 'Сохранено');
            return $this->redirect(['index']);
        }

        return $this->render('_form_main', [
            'model' => $model,
            'title' => 'Управление бессмертным полком факультета'
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
        $users = RbacHelpers::getByTwoRole(RbacHelpers::$FAKULTET, RbacHelpers::$OFFICER);

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

    public function actionYmb()
    {
        return $this->render('YMB', [
        ]);
    }

    public function actionAnnouncement()
    {
        $model = new News();
        $publications = new NewsPublications();

        if ($model->load(Yii::$app->request->post())) {
            $model->title = 'Объявление';
            $model->created_at = time();
            $model->updated_at = strtotime($model->updated_at);
            $publications->announcement = true;


            $this->newsService->createNews($model, $publications);
            Yii::$app->session->setFlash('success', 'Объявление опубликовано');
            return $this->redirect(['index']);
        }

        return $this->render('_form_main', [
            'model' => $model,
            'title' => 'Добавить объявление',
            'isDate' => true
        ]);
    }

}
