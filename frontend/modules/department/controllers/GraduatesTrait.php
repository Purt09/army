<?php


namespace frontend\modules\department\controllers;

use core\entities\Army\Plan;
use core\entities\Army\PlanCategory;
use core\entities\User\TblMilUnit;
use Yii;

trait GraduatesTrait
{
    public function actionGraduates()
    {
        $category = PlanCategory::find()->where(['alias' => 'graduates'])->one();
        $plans = Plan::find()->where(['unit_id' => self::UNIT_ID])
            ->andWhere(['category_id' => $category->id])->all();
        $milUnit = TblMilUnit::findOne(self::UNIT_ID);

        return $this->render('../common/graduates/index', [
            'milUnit' => $milUnit,
            'graduates' => $plans,
        ]);
    }

    public function actionGraduateCreate()
    {
        $model = new Plan();
        $category = PlanCategory::find()->where(['alias' => 'graduates'])->one();

        if ($model->load(Yii::$app->request->post())) {
            $model->unit_id = self::UNIT_ID;
            $model->category_id = $category->id;
            $model->created_at = time();
            if(!empty($_FILES['Plan']['tmp_name']['img'])) {
                $file = file_get_contents($_FILES['Plan']['tmp_name']['img']);
                $type = $_FILES['Plan']['type']['img'];
                $imageData = base64_encode($file);
                $src = 'data: '. $type.';base64,'.$imageData;
                $model->img = $src;
            }
            $model->save();
            Yii::$app->session->setFlash('success', 'Выпускник опубликован');
            return $this->redirect(['graduates']);
        }

        return $this->render('../common/graduates/create', [
            'category' => $category,
            'model' => $model
        ]);
    }

    public function actionGraduateUpdate($id)
    {
        $model = $this->findModel($id);
        $category = PlanCategory::find()->where(['alias' => 'graduates'])->one();
        $image = $model->img;

        if ($model->load(Yii::$app->request->post())) {
            $model->unit_id = self::UNIT_ID;
            $model->category_id = $category->id;
            $model->created_at = time();
            if(!empty($_FILES['Plan']['tmp_name']['img'])) {
                $file = file_get_contents($_FILES['Plan']['tmp_name']['img']);
                $type = $_FILES['Plan']['type']['img'];
                $imageData = base64_encode($file);
                $src = 'data: '. $type.';base64,'.$imageData;
                $model->img = $src;
            } else {
                $model->img = $image;
            }
            $model->save();
            Yii::$app->session->setFlash('success', 'Выпускник сохранен');
            return $this->redirect(['graduates']);
        }

        return $this->render('../common/graduates/update', [
            'category' => $category,
            'model' => $model
        ]);
    }

    public function actionGraduateDelete($id)
    {
        $model = $this->findModel($id);
        $model->delete();

        Yii::$app->session->setFlash('success', 'Выпускник удален');
        return $this->redirect(['graduates']);
    }

    private function findModel($id)
    {
        return Plan::findOne($id);
    }
}