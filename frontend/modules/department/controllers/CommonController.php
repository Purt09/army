<?php


namespace frontend\modules\department\controllers;


use bupy7\pages\models\Page;
use core\entities\News\News;
use core\entities\News\NewsPublications;
use core\entities\News\NewsSearch;
use yii\web\Controller;
use Yii;

class CommonController extends Controller
{
    public function actionIndex()
    {

        return $this->render('index', [
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
            'controller' => 'common'
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
}