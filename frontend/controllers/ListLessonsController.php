<?php


namespace frontend\controllers;


use core\entities\Education\Semester;
use yii\web\Controller;

class ListLessonsController extends Controller
{
    public function actionCadet()
    {
        $semesters = Semester::find()->limit(4)->with('timetables')->orderBy('id DESC')->all();

        return $this->render('cadet', [
            'semesters' => $semesters
        ]);
    }

    public function actionTeacher()
    {
    }

    public function actionCommon()
    {
        $semesters = Semester::find()->limit(4)->with('timetables')->orderBy('id DESC')->all();
        return $this->render('common', [
            'semesters' => $semesters
        ]);
    }
}