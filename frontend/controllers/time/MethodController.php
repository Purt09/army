<?php


namespace frontend\controllers\time;


use yii\web\Controller;

class MethodController extends Controller
{
    public function actionCelAcademy()
    {
        return $this->render('cel-academy');
    }
    public function actionCelFakultet()
    {
        return $this->render('cel-fakultet');
    }
    public function actionPp()
    {
        return $this->render('pp');
    }
    public function actionPlans()
    {
        return $this->render('plans');
    }
    public function actionPisp()
    {
        return $this->render('pisp');
    }

}