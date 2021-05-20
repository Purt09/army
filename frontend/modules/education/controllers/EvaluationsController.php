<?php


namespace frontend\modules\education\controllers;


use yii\web\Controller;

class EvaluationsController extends Controller
{
    public function actionRating()
    {
        return $this->render('rating');
    }
}