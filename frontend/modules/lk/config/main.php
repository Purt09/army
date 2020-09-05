<?php
return [
    'components' => [
    ],
    'params' => [
        // список параметров
    ],
    'as access' => [
        'class' => 'yii\filters\AccessControl',
        'except' => ['auth/login', 'auth/logout'],
        'rules' => [
            [
                'allow' => true,
                'roles' => ['@'],
                'matchCallback' => function ($rule, $action) {
                    if(Yii::$app->user->identity->base->id == Yii::$app->request->get('id'))
                        return true;
                    if(\core\helpers\user\RbacHelpers::checkRole(\core\helpers\user\RbacHelpers::$ADMIN))
                        return true;
                    if(\core\helpers\user\RbacHelpers::checkRole(\core\helpers\user\RbacHelpers::$MANAGER))
                        return true;
                    if(\core\helpers\user\RbacHelpers::checkRole(\core\helpers\user\RbacHelpers::$COURSE_MAIN))
                        return true;
                    return false;
                }
            ],
        ],
    ],
];
