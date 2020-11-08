<?php


namespace frontend\modules\department\controllers;


use core\entities\Education\Subject;
use core\entities\Education\SubjectSearch;
use Yii;
use yii\web\NotFoundHttpException;

trait CommonSubjectTrait
{
    /**
     * Lists all Subject models.
     * @return mixed
     */
    public function actionSubjects()
    {
        $searchModel = new SubjectSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('subject/index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Creates a new Subject model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionSubjectCreate()
    {
        $model = new Subject();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['common/subjects', 'id' => $model->id]);
        }

        return $this->render('subject/create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Subject model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionSubjectUpdate($id)
    {
        $model = $this->findModelSubject($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['common/subjects', 'id' => $model->id]);
        }

        return $this->render('subject/update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Subject model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionSubjectDelete($id)
    {
        $this->findModelSubject($id)->delete();

        return $this->redirect(['subjects']);
    }

    /**
     * Finds the Subject model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Subject the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModelSubject($id)
    {
        if (($model = Subject::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}