<?php


namespace frontend\modules\lk\controllers;


use core\entities\User\Science\TblStaffScienceGraduate;
use Yii;

class ScienceGraduateController extends MainController
{
    public function actionAdd($id)
    {
        $model = new TblStaffScienceGraduate();
        $model->id_staff = $id;

        if($model->load(\Yii::$app->request->post()) ){
            if($model->save()){
                \Yii::$app->session->setFlash('success', 'Ученая степень добавлена');
                return $this->redirect(Yii::$app->request->referrer ?: Yii::$app->homeUrl);
            }
            vardump($model);
        }
        return $this->render('add', [
            'model' => $model,
            'staff' => $this->staff
        ]);
    }

}