<?php


namespace frontend\modules\lk\controllers;


use core\entities\User\Vacation\TblStaffVacation;
use Yii;

class VacationController extends MainController
{
    public function actionAdd($id)
    {
        $model = new TblStaffVacation();
        $model->id_staff = $id;

        if($model->load(\Yii::$app->request->post()) ){
            if($model->save()){
                \Yii::$app->session->setFlash('success', 'Отпуск добавлен');
                return $this->redirect(Yii::$app->request->referrer ?: Yii::$app->homeUrl);
            }
        }
        return $this->render('add', [
            'model' => $model,
            'staff' => $this->staff
        ]);
    }
}