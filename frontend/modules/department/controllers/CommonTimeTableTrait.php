<?php


namespace frontend\modules\department\controllers;

use core\entities\Education\Timetable;
use core\entities\Education\TimetableSearch;
use Yii;
use yii\web\NotFoundHttpException;

/**
 * Управление расписанием делаем отдельным трейтом, чтобы было более структурировано
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

        try {
            if ($model->load(Yii::$app->request->post())) {
                if($model->summary) {
                    $timeTable = Timetable::find()->where(['semester_id' => $model->semester_id])->andWhere(['unit_id' => $model->unit_id])->one();
                    if(isset($timeTable)){
                        return $this->redirect(['time-table-upload', 'id' => $timeTable->id]);
                    }
                }
                if($model->save())
                    Yii::$app->session->setFlash('success', 'Расписание создано, теперь загрузите его');
                return $this->redirect(['time-table-upload', 'id' => $model->id]);
            }

        } catch (\RuntimeException $e) {
            Yii::$app->session->setFlash('error', $e->getMessage());
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

    public function actionTimeTableDelete($id)
    {
        $this->findModelTimeTable($id)->delete();
        return $this->redirect(['time-table']);
    }

    protected function findModelTimeTable($id)
    {
        if (($model = Timetable::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}