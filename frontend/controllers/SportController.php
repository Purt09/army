<?php


namespace frontend\controllers;


use yii\web\Controller;

class SportController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}