<?php


namespace frontend\controllers\time;


use yii\base\Controller;

class ScienceController extends Controller
{
    public function actionVno()
    {
        return $this->render('vno');
    }
    public function actionPisp()
    {
        return $this->render('pisp');
    }

}