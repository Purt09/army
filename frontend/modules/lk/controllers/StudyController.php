<?php


namespace frontend\modules\lk\controllers;


use yii\base\Controller;

class StudyController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}