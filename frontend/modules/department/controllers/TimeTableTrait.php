<?php


namespace frontend\modules\department\controllers;


use core\entities\Education\Timetable;
use core\entities\Education\TimetableSearch;
use Yii;
use yii\web\NotFoundHttpException;

trait TimeTableTrait
{


    public function actionTimeTable()
    {
        $searchModel = new TimetableSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams, self::UNIT_ID);

        return $this->render('../common/time-table/index', [
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

        return $this->render('../common/time-table/upload', [
            'model' => $model,
        ]);
    }

    public function actionTimeTableCreate()
    {
        $model = new Timetable();

        try {
            if ($model->load(Yii::$app->request->post())) {
                $model->summary = true;
                $model->unit_id = self::UNIT_ID;
                $timeTable = Timetable::find()->where(['semester_id' => $model->semester_id])->andWhere(['unit_id' => $model->unit_id])->one();
                if(isset($timeTable))
                    throw new \RuntimeException('Такое сводное расписание уже существует. Не надо создавать новое, редактируйте текущее');
                if($model->save())
                    Yii::$app->session->setFlash('success', 'Расписание создано, теперь загрузите его');
                return $this->redirect(['time-table-upload', 'id' => $model->id]);
            }

        } catch (\RuntimeException $e) {
            Yii::$app->session->setFlash('error', $e->getMessage());
        }

        return $this->render('../common/time-table/create_cafedr', [
            'model' => $model,
        ]);
    }

    public function actionTimeTableUpdate($id)
    {
        $model = $this->findModelTimeTable($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['time-table-upload', 'id' => $model->id]);
        }

        return $this->render('../common/time-table/update', [
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