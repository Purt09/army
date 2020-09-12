<?php


namespace frontend\modules\lk\controllers;


use core\entities\User\Education\TblEducation;
use Yii;

class EducationController extends MainController
{
    public function actionAdd($id)
    {
        $model = new TblEducation();
        $model->id_staff = $id;

        if($model->load(\Yii::$app->request->post()) && $model->validate()){
            if($model->save()){
                \Yii::$app->session->setFlash('success', 'Образование добавлено');
                return $this->redirect(Yii::$app->request->referrer ?: Yii::$app->homeUrl);
            }
        }
        return $this->render('add', [
            'model' => $model,
            'staff' => $this->staff
        ]);
    }
}