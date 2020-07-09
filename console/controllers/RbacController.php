<?php

namespace console\controllers;

use core\helpers\user\RbacHelpers;
use yii\console\Controller;

class RbacController extends Controller
{
    public function actionInit()
    {
        RbacHelpers::init();
    }
}