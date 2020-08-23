<?php
return [
    'components' => [
    ],
    'params' => [
        // список параметров
    ],
    'as access' => [
        'class' => 'yii\filters\AccessControl',
        'except' => ['auth/login', 'profile/view'],
        'rules' => [
            [
                'allow' => true,
                'roles' => ['@'],
                'matchCallback' => function ($rule, $action) {
                    if(Yii::$app->user->id == Yii::$app->request->post('id'))
                        return true;
                    if(\core\helpers\user\RbacHelpers::checkRole(\core\helpers\user\RbacHelpers::$ADMIN))
                        return true;
                    if(\core\helpers\user\RbacHelpers::checkRole(\core\helpers\user\RbacHelpers::$MANAGER))
                        return true;
                    return false;
                }
            ],
        ],
    ],
];