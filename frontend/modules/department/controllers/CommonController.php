<?php


namespace frontend\modules\department\controllers;


use yii\web\Controller;

class CommonController extends Controller
{
    public function actionNewsIndex()
    {
        return $this->render('news-index');
    }
}