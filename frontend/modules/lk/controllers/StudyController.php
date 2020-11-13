<?php


namespace frontend\modules\lk\controllers;


use core\entities\Education\Evaluation;
use core\entities\Education\Semester;
use core\entities\User\TblStaff;
use Yii;
use yii\web\Controller;

class StudyController extends Controller
{
    public function actionIndex()
    {
        $staff = TblStaff::find()->where(['id' => \Yii::$app->request->get('id')])->one();
        $semesters = Semester::find()->limit(6)->orderBy('id ASC')->with('evaluations')->all();
        return $this->render('index',[
            'staff' => $staff,
            'semesters' => $semesters
        ]);
    }

    public function actionCreate($id, $semester_id)
    {
        $model = new Evaluation();

        if ($model->load(Yii::$app->request->post())) {
            $staff = TblStaff::find()->where(['id' => \Yii::$app->request->get('id')])->one();
            $model->user_id = $staff->user->id;
            $model->semester_id = $semester_id;
            if($model->save())
                Yii::$app->session->setFlash('success', 'Оценка добавлена');
            vardump($model);
            return $this->redirect(['index', 'id' => $id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }
}