<?php


namespace frontend\controllers;


use yii\web\Controller;

class VprController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionNotKilled()
    {
        return $this->render('not-killed');
    }

}