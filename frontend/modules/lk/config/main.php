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
                'allow' => false,
                'roles' => ['*'],
            ],
            [
                'allow' => true,
                'roles' => ['@'],
            ],
        ],
    ],
];