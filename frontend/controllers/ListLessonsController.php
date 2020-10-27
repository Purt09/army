<?php


namespace frontend\controllers;


use core\entities\Education\Semester;
use core\entities\Education\Timetable;
use yii\web\Controller;

class ListLessonsController extends Controller
{
    public function actionCadet()
    {
        $semesters = Semester::find()->limit(4)->orderBy('id ASC')->all();
        $timetables = [];
        foreach ($semesters as $semester){
            $timetable = Timetable::find()->where(['semester_id' => $semester->id])->all();
            $timetables += [
                $semester->id => $timetable
            ];
        }

        return $this->render('cadet', [
            'semesters' => $semesters,
            'timetables' => $timetables
        ]);
    }

    public function actionCommon()
    {
        $semesters = Semester::find()->limit(4)->orderBy('id ASC')->all();
        $timetables = [];
        foreach ($semesters as $semester){
            $timetable = Timetable::find()->where(['semester_id' => $semester->id])->andWhere(['summary' => true])->all();
            $timetables += [
                $semester->id => $timetable
            ];
        }
        return $this->render('common', [
            'semesters' => $semesters,
            'timetables' => $timetables
        ]);
    }
}