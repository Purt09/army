<?php


namespace frontend\modules\department\controllers;



use bupy7\pages\models\Page;
use core\entities\News\News;
use core\entities\News\NewsPublications;
use frontend\modules\department\useCases\NewsService;
use Yii;
use yii\web\Controller;

class FiveFiveController extends Controller
{
    private $newsService;
//    public function behaviors()
//    {
//        return [
//            'access' => [
//                'class' => AccessControl::className(),
//                'rules' => [
//                    [
//                        'allow' => true,
//                        'roles' => ['course51'],
//                    ],
//                ],
//            ],
//        ];
//    }


    public function __construct($id, $module, $config = [])
    {
        $this->newsService = new NewsService();
        parent::__construct($id, $module, $config);
    }

    public function actionIndex()
    {
//        $content = Page::find()->where(['alias' => 'main_55kaf'])->one();
//        $history = Page::find()->where(['alias' => 'history_55kaf-main'])->one();
//        $news = NewsPublications::find()->where(['54_cafedra' => 1])->with('article')->all();

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
        return $this->render('manager');
    }
}