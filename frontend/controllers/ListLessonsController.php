<?php


namespace frontend\controllers;


use yii\web\Controller;

class ListLessonsController extends Controller
{
    public function actionCadet()
    {
        return $this->render('cadet');
    }

    public function actionTeacher()
    {
        return $this->render('teacher');
    }

    public function actionCommon()
    {
        return $this->render('common');
    }
}