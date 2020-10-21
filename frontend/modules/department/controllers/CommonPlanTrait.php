<?php


namespace frontend\modules\department\controllers;

use core\entities\Army\Plan;
use core\entities\Army\PlanCategory;
use core\entities\Army\PlanSearch;
use Yii;

/**
 * Управление планами делаем отдельным трейтом, чтобы было более структурировано
 *
 * Trait CommonTimeTableTrait
 * @package frontend\modules\department\controllers
 */
trait CommonPlanTrait
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

        return $this->render('plan/plans', [
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

        switch ($alias) {
            case 'fak_plan_month':
            case 'fak_plan_year':
            case 'academy_plan_month':
            case 'fak_plan_yms':
                return $this->render('plan/create-plan', [
                    'category' => $category,
                    'model' => $model
                ]);
        }
    }

    public function actionPlanUpdate($id)
    {
        $model = Plan::findOne($id);
        $category = PlanCategory::findOne($model->category_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['plans', 'alias' => $category->alias]);
        }

        return $this->render('plan/create-plan', [
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

        return $this->render('plan/upload', [
            'model' => $model,
            'category' => $category
        ]);
    }

    public function actionViewPlans($alias)
    {
        $category = PlanCategory::find()->where(['alias' => $alias])->one();
        $models = Plan::find()->where(['category_id' => $category->id])->limit(10)->orderBy('date')->all();


        return $this->render('plan/view-plans', [
            'models' => $models,
            'category' => $category
        ]);
    }
}