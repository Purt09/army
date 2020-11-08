<?php


namespace frontend\modules\lk\controllers;


use core\entities\User\Science\TblStaffScienceRank;
use Yii;

class ScienceRankController extends MainController
{
    public function actionAdd($id)
    {
        $model = new TblStaffScienceRank();
        $model->id_staff = $id;

        if($model->load(\Yii::$app->request->post()) && $model->validate()){
            if($model->save()){
                \Yii::$app->session->setFlash('success', 'Ученое звание добавлено');
                return $this->redirect(Yii::$app->request->referrer ?: Yii::$app->homeUrl);
            }
        }
        return $this->render('add', [
            'model' => $model,
            'staff' => $this->staff
        ]);
    }
}