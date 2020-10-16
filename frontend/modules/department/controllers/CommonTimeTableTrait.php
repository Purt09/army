<?php


namespace frontend\modules\department\controllers;

use core\entities\Education\Timetable;
use core\entities\Education\TimetableSearch;
use Yii;
use yii\web\NotFoundHttpException;

/**
 * Управление расписанием делаем отдельным трейтом, чтобы класс
 *
 * Trait CommonTimeTableTrait
 * @package frontend\modules\department\controllers
 */
trait CommonTimeTableTrait
{
    public function actionTimeTable()
    {
        $searchModel = new TimetableSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('time-table/index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionTimeTableUpload($id)
    {
        $model = $this->findModelTimeTable($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['time-table-upload', 'id' => $model->id]);
        }

        return $this->render('time-table/upload', [
            'model' => $model,
        ]);
    }

    public function actionTimeTableCreate()
    {
        $model = new Timetable();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['time-table-upload', 'id' => $model->id]);
        }

        return $this->render('time-table/create', [
            'model' => $model,
        ]);
    }

    public function actionTimeTableUpdate($id)
    {
        $model = $this->findModelTimeTable($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['time-table-upload', 'id' => $model->id]);
        }

        return $this->render('time-table/update', [
            'model' => $model,
        ]);
    }

    protected function findModelTimeTable($id)
    {
        if (($model = Timetable::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}