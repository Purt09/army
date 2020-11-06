<?php


namespace frontend\modules\lk\controllers;


use core\entities\User\TblStaff;
use yii\base\Controller;

class StudyController extends Controller
{
    public function actionIndex()
    {
        $user = TblStaff::find()->where(['id' => \Yii::$app->request->get('id')])->one();
        return $this->render('index',[
            'user' => $user
        ]);
    }
}