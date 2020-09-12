<?php


namespace frontend\modules\courses\controllers;

use core\entities\News\News;
use core\entities\News\NewsPublications;
use core\entities\News\NewsSearch;
use frontend\modules\department\useCases\NewsService;
use Yii;

/**
 * Страницы, которые абсолютно одинаковые!
 * Trait CommonTraits
 * @package frontend\modules\courses\controllers
 */
trait CommonTraits
{
    private $newsService;

    public function __construct($id, $module, $config = [])
    {
        $this->newsService = new NewsService();
        parent::__construct($id, $module, $config);
    }

    public function actionManager()
    {
        return $this->render('manager', [
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
}