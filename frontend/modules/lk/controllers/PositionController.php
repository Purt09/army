<?php


namespace frontend\modules\lk\controllers;


use core\entities\User\Position\TblStaffMilPosition;
use core\entities\User\Position\TblStaffMilPositionSearch;
use Yii;

class PositionController extends MainController
{
    public function actionAdd($id)
    {
        $model = new TblStaffMilPosition();
        $model->id_staff = $id;

        if($model->load(\Yii::$app->request->post()) && $model->validate()){
            if($model->save()){
                $this->staff->id_current_mil_position = $model->id;
                $this->staff->save();
                \Yii::$app->session->setFlash('success', 'Должность изменена на ' . $model->milPosition->name);
                return $this->redirect(Yii::$app->request->referrer ?: Yii::$app->homeUrl);
            }
        }
        return $this->render('add', [
            'model' => $model,
            'staff' => $this->staff
        ]);
    }

    public function actionEdit($position_id)
    {
        $model = TblStaffMilPosition::findOne($position_id);

        if($model->load(\Yii::$app->request->post()) && $model->validate()){
            if($model->save()){
                $this->staff->id_current_mil_position = $model->id;
                $this->staff->save();
                \Yii::$app->session->setFlash('success', 'Должность обновлена на ' . $model->milPosition->name);
                return $this->redirect(Yii::$app->request->referrer ?: Yii::$app->homeUrl);
            }
        }
        return $this->render('add', [
            'model' => $model,
            'staff' => $this->staff
        ]);
    }

    public function actionHistory($id)
    {
        $searchModel = new TblStaffMilPositionSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams, $id);

        return $this->render('history', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'staff' => $this->staff
        ]);
    }
}