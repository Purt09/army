<?php


namespace frontend\modules\lk\controllers;


use yii\web\Controller;

class DesktopController extends Controller
{

    public function actionIndex()
    {

        return $this->render('index', [
        ]);
    }
}