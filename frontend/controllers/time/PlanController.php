<?php


namespace frontend\controllers\time;


use yii\web\Controller;

class PlanController extends Controller
{
    public function actionAcademy()
    {
        return $this->render('academy');
    }

    public function actionFakultet()
    {
        return $this->render('fakultet');
    }

    public function actionFakultetYear()
    {
        return $this->render('fakultet-year');
    }

    public function actionYms()
    {
        return $this->render('yms');
    }
}