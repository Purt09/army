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

class VprController extends Controller
{
    public function actionAddPromotion($id)
    {
        $staff = $this->findModel($id);
        $model = new TblStaffPromotion();
        $model->id_staff = $id;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index', 'id' => $staff->id]);
        }

        return $this->render('_form_promotion', [
            'user' => $staff,
            'model' => $model,
        ]);
    }

    public function actionAddPenalty($id)
    {
        $staff = $this->findModel($id);
        $model = new TblStaffPenalty();
        $model->id_staff = $id;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index', 'id' => $staff->id]);
        }


        return $this->render('_form_penalty', [
            'user' => $staff,
            'model' => $model,
        ]);
    }

    public function actionIndex($id)
    {
        $staff = $this->findModel($id);

        $penaltySearch = new TblStaffPenaltySearch();
        $penaltyProvider = $penaltySearch->search(Yii::$app->request->queryParams);

        $promotionSearch = new TblStaffPromotionSearch();
        $promotionProvider = $promotionSearch->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'user' => $staff,
            'penaltySearch' => $penaltySearch,
            'penaltyProvider' => $penaltyProvider,
            'promotionSearch' => $promotionSearch,
            'promotionProvider' => $promotionProvider,
        ]);
    }

    private function findModel($id)
    {
        $user = TblStaff::find()->with('user')->where(['id' => $id])->one();
        if (!isset($user))
            throw new NotFoundException('Пользователь не найден');
        return $user;
    }
}