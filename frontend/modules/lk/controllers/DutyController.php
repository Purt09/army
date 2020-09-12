<?php


namespace frontend\modules\lk\controllers;


use core\entities\User\Duty\TblStaffDuty;
use core\entities\User\Duty\TblStaffDutyJourney;
use Yii;

class DutyController extends MainController
{
    public function actionAdd($id)
    {
        $model = new TblStaffDuty();
        $model->id_staff = $id;

        if($model->load(\Yii::$app->request->post()) && $model->validate()){
            if($model->save()){
                \Yii::$app->session->setFlash('success', 'Наряд добавлен');
                return $this->redirect(Yii::$app->request->referrer ?: Yii::$app->homeUrl);
            }
        }
        return $this->render('add', [
            'model' => $model,
            'staff' => $this->staff
        ]);
    }

    public function actionAddJourney($id)
    {
        $model = new TblStaffDutyJourney();
        $model->id_staff = $id;

        if($model->load(\Yii::$app->request->post()) && $model->validate()){
            if($model->save()){
                \Yii::$app->session->setFlash('success', 'Командировка добавлена');
                return $this->redirect(Yii::$app->request->referrer ?: Yii::$app->homeUrl);
            }
        }
        return $this->render('add-journey', [
            'model' => $model,
            'staff' => $this->staff
        ]);
    }
}