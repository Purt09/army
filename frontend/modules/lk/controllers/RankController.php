<?php


namespace frontend\modules\lk\controllers;


use core\entities\User\MilitaryRank\TblStaffMilitaryRank;
use core\entities\User\MilitaryRank\TblStaffMilitaryRankSearch;
use Yii;

class RankController extends MainController
{
    public function actionIndex($id)
    {
        $model = new TblStaffMilitaryRank();
        $model->id_staff = $id;

        if($model->load(\Yii::$app->request->post()) && $model->validate()){
            if($model->save()){
                $this->staff->id_current_mil_rank = $model->id;
                $this->staff->save();
                \Yii::$app->session->setFlash('success', 'Звание обновлено на ' . $model->militaryRank->name);
            }
        }
        return $this->render('index', [
            'model' => $model
        ]);
    }

    public function actionHistory($id)
    {
        $searchModel = new TblStaffMilitaryRankSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams, $id);

        return $this->render('history', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
}