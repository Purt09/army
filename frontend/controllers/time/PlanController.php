<?php


namespace frontend\controllers\time;


use yii\web\Controller;

class PlanController extends Controller
{
    public function actionTest()
    {
        return $this->render('test');
    }

    public function actionScience()
    {
        return $this->render('science');
    }
}