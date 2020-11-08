<?php


namespace frontend\modules\lk\controllers;


use common\repositories\NotFoundException;
use core\entities\User\TblStaff;
use core\entities\User\Vpr\TblStaffPenalty;
use core\entities\User\Vpr\TblStaffPenaltySearch;
use core\entities\User\Vpr\TblStaffPromotion;
use core\entities\User\Vpr\TblStaffPromotionSearch;
use Yii;
use yii\web\Controller;

class VprController extends MainController
{
    public function actionAddPromotion($id)
    {
        $model = new TblStaffPromotion();
        $model->id_staff = $id;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index', 'id' => $this->staff->id]);
        }

        return $this->render('_form_promotion', [
            'user' => $this->staff,
            'model' => $model,
        ]);
    }

    public function actionAddPenalty($id)
    {
        $model = new TblStaffPenalty();
        $model->id_staff = $id;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index', 'id' => $this->staff->id]);
        }


        return $this->render('_form_penalty', [
            'user' => $this->staff,
            'model' => $model,
        ]);
    }

    public function actionIndex($id)
    {
        $penaltySearch = new TblStaffPenaltySearch();
        $penaltyProvider = $penaltySearch->search(Yii::$app->request->queryParams, $id);

        $promotionSearch = new TblStaffPromotionSearch();
        $promotionProvider = $promotionSearch->search(Yii::$app->request->queryParams, $id);

        return $this->render('index', [
            'user' => $this->staff,
            'penaltySearch' => $penaltySearch,
            'penaltyProvider' => $penaltyProvider,
            'promotionSearch' => $promotionSearch,
            'promotionProvider' => $promotionProvider,
        ]);
    }
}