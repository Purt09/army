<?php


namespace frontend\modules\department\controllers;


use core\entities\Education\Evaluation;
use core\entities\Education\EvaluationSearch;
use core\entities\User\User;
use core\helpers\user\RbacHelpers;
use Yii;
use yii\helpers\ArrayHelper;
use yii\web\NotFoundHttpException;

trait CommonEvaluationTrait
{
    /**
     * Lists all Evaluation models.
     * @return mixed
     */
    public function actionEvaluations()
    {
        $searchModel = new EvaluationSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('evaluation/index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Evaluation model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionViewEvaluation($id)
    {
        return $this->render('evaluation/view', [
            'model' => $this->findModelEvaluation($id),
        ]);
    }

    /**
     * Creates a new Evaluation model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreateEvaluation()
    {
        $model = new Evaluation();
        $users1 = \Yii::$app->authManager->getUserIdsByRole(RbacHelpers::$CADET);
        $users = User::find()->where(['id' => $users1])->with('base')->asArray()->all();
        $users = ArrayHelper::map($users, 'id', 'base.fio');
        $users = array_filter($users);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['evaluations']);
        }

        return $this->render('evaluation/create', [
            'model' => $model,
            'users' => $users
        ]);
    }

    /**
     * Updates an existing Evaluation model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdateEvaluation($id)
    {
        $model = $this->findModelEvaluation($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('evaluation/update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Evaluation model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDeleteEvaluation($id)
    {
        $this->findModelEvaluation($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Evaluation model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Evaluation the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModelEvaluation($id)
    {
        if (($model = Evaluation::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}