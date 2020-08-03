<?php


namespace frontend\modules\department\controllers;


use core\entities\News\NewsSearch;
use yii\web\Controller;
use Yii;

class CommonController extends Controller
{
    public function actionNews()
    {
        $searchModel = new NewsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('news', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

}