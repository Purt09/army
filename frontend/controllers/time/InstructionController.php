<?php

namespace frontend\controllers\time;


use yii\web\Controller;

class InstructionController extends Controller
{

    public function actionInstruction()
    {
        return $this->render('instruction');
    }
}
