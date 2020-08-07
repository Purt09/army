<?php


namespace frontend\modules\department\controllers;


use bupy7\pages\models\Page;
use core\entities\News\News;
use core\entities\News\NewsPublications;
use core\entities\News\NewsSearch;
use frontend\modules\department\useCases\NewsService;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;

class FiveFiveController extends Controller
{
    private $newsService;
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'except' => ['index'],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['cafedra55', 'admin'],
                    ],
                ],
            ],
        ];
    }


    public function __construct($id, $module, $config = [])
    {
        $this->newsService = new NewsService();
        parent::__construct($id, $module, $config);
    }

    public function actionIndex()
    {
        $content = Page::find()->where(['alias' => 'main_55kaf'])->one();
        $history = Page::find()->where(['alias' => 'history_55kaf'])->one();
        $news = NewsPublications::find()->where(['54_cafedra' => 1])->with('articles')->all();

        return $this->render('index', [
            'content' => $content,
            'history' => $history,
            'news' => $news
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
        $newsPublications = NewsPublications::find()->where(['54_cafedra' => true])->with('articles')->all();
        return $this->render('manager', [
            'newsPublications' => $newsPublications
        ]);
    }

    public function actionMain()
    {
        $model = Page::find()->where(['alias' => 'main_55kaf'])->one();

        if ($model->load(Yii::$app->request->post())) {
            $model->save();
            Yii::$app->session->setFlash('success', 'Сохранено');
            return $this->redirect(['index']);
        }

        return $this->render('main', [
            'model' => $model,
            'title' => 'Управление главной 55 кафедры'
        ]);
    }

    public function actionHistory()
    {
        $model = Page::find()->where(['alias' => 'history_55kaf'])->one();

        if ($model->load(Yii::$app->request->post())) {
            $model->save();

            Yii::$app->session->setFlash('success', 'Сохранено');
            return $this->redirect(['index']);
        }

        return $this->render('main', [
            'model' => $model,
            'title' => 'Управление историей 55 кафедры'
        ]);
    }


    public function actionGraduate()
    {
        $model = Page::find()->where(['alias' => 'department_55kaf'])->one();

        if ($model->load(Yii::$app->request->post())) {
            $model->save();

            Yii::$app->session->setFlash('success', 'Сохранено');
            return $this->redirect(['index']);
        }

        return $this->render('main', [
            'model' => $model,
            'title' => 'Управление выпускиниками 55 кафедры'
        ]);
    }

    public function actionViewGraduate()
    {
        $model = Page::find()->where(['alias' => 'department_55kaf'])->one();


        return $this->render('view-graduate', [
            'model' => $model,
        ]);
    }
}
