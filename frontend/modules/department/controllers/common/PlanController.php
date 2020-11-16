<?php


namespace frontend\modules\department\controllers\common;


use core\entities\Army\Plan;
use core\entities\Army\PlanCategory;
use core\entities\Army\PlanSearch;
use frontend\modules\department\controllers\CommonController;
use Yii;

class PlanController extends CommonController
{
    /**
     * Lists all Plan models.
     * @return mixed
     */
    public function actionPlans($alias)
    {
        $category = PlanCategory::find()->where(['alias' => $alias])->one();
        $searchModel = new PlanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams, $category->id);

        return $this->render('plans', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'category' => $category
        ]);
    }

    /**
     * Lists all Plan models.
     * @return mixed
     */
    public function actionCreatePlan($alias)
    {
        $category = PlanCategory::find()->where(['alias' => $alias])->one();
        $model = new Plan();

        if ($model->load(Yii::$app->request->post())) {
            $model->unit_id = self::UNIT_ID;
            $model->category_id = $category->id;
            $model->created_at = time();
            $model->save();
            return $this->redirect(['plan-upload', 'id' => $model->id]);
        }

        return $this->render('create-plan', [
            'category' => $category,
            'model' => $model
        ]);
    }

    public function actionDelete($id)
    {
        $model = Plan::findOne($id);
        $category = PlanCategory::findOne($model->category_id);
        $model->delete();

        return $this->redirect(['plans', 'alias' => $category->alias]);
    }

    public function actionPlanUpdate($id)
    {
        $model = Plan::findOne($id);
        $category = PlanCategory::findOne($model->category_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['plans', 'alias' => $category->alias]);
        }

        return $this->render('create-plan', [
            'model' => $model,
            'category' => $category
        ]);
    }

    public function actionPlanUpload($id)
    {
        $model = Plan::findOne($id);
        $category = PlanCategory::findOne($model->category_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['plans', 'alias' => $category->alias]);
        }

        return $this->render('upload', [
            'model' => $model,
            'category' => $category
        ]);
    }
}