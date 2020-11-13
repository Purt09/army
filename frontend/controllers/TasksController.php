<?php


namespace frontend\controllers;


use core\entities\Army\TaskCommonSearch;
use Yii;
use yii\web\Controller;

class TasksController extends Controller
{
    /**
     * Lists all TaskCommon models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TaskCommonSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
}