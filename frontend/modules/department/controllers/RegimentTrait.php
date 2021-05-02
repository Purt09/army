<?php


namespace frontend\modules\department\controllers;


use core\entities\Army\Plan;
use core\entities\Army\PlanCategory;
use core\entities\User\TblMilUnit;
use Yii;

trait RegimentTrait
{
    public function actionRegiment()
    {
        $category = PlanCategory::find()->where(['alias' => 'egiment'])->one();
        $plans = Plan::find()->where(['unit_id' => self::UNIT_ID])
            ->andWhere(['category_id' => $category->id])->all();
        $milUnit = TblMilUnit::findOne(self::UNIT_ID);
        return $this->render('../common/regiment/index', [
            'milUnit' => $milUnit,
            'regiments' => $plans,
        ]);
    }

    public function actionRegimentCreate()
    {
        $model = new Plan();
        $category = PlanCategory::find()->where(['alias' => 'egiment'])->one();

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
            return $this->redirect(['regiment']);
        }

        return $this->render('../common/regiment/create', [
            'category' => $category,
            'model' => $model
        ]);
    }

    public function actionRegimentUpdate($id)
    {
        $model = $this->findModelRefiment($id);
        $category = PlanCategory::find()->where(['alias' => 'egiment'])->one();
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
            return $this->redirect(['regiment']);
        }

        return $this->render('../common/regiment/update', [
            'category' => $category,
            'model' => $model
        ]);
    }

    public function actionRegimentDelete($id)
    {
        $model = $this->findModelRefiment($id);
        $model->delete();

        Yii::$app->session->setFlash('success', 'Удалено');
        return $this->redirect(['regiment']);
    }

    private function findModelRefiment($id)
    {
        return Plan::findOne($id);
    }

}