<?php

namespace frontend\modules\department\controllers\common;

use core\entities\News\News;
use core\entities\News\NewsPublications;
use core\plugininfo\mod;
use frontend\modules\department\useCases\NewsService;
use core\entities\News\NewsSearch;
use yii\web\Controller;
use Yii;

class AnnouncementController extends Controller
{

    private $newsService;

    public  function  __construct($id, $module, $config = [])
    {
        $this->newsService = new NewsService();
        parent::__construct($id, $module, $config);
    }

    public function actionIndex()
    {
        $searchModel = new NewsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams, 'announcement');

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionCreate()
    {
        $model = new News();
        $publications = new NewsPublications();

        if ($model->load(Yii::$app->request->post())) {
            $model->title = 'Объявление';
            $time = $model->updated_at;
            $publications->announcement = true;
            $this->newsService->createNews($model, $publications);
            $model->updated_at = strtotime($time);
            $model->save();
            Yii::$app->session->setFlash('success', 'Объявление опубликовано');
            return $this->redirect(['index']);
        }

        return $this->render('create', [
            'model' => $model,
            'title' => 'Добавить объявление',
            'isDate' => true
        ]);
    }

    public function actionUpdate($id)
    {
        $model = News::findOne($id);

        if ($model->load(Yii::$app->request->post())){
            $model->updated_at = strtotime($model->updated_at);
            if($model->save())
                Yii::$app->session->setFlash('success','Объявление изменено');
            return $this->redirect(['index']);
        };
        $model->updated_at = null;

        return $this->render('update', [
            'model'=>$model,
        ]);
    }

}
