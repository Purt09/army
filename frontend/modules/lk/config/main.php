<?php
return [
    'components' => [
    ],
    'params' => [
        // список параметров
    ],
    'as access' => [
        'class' => 'yii\filters\AccessControl',
        'except' => ['auth/login', 'site/error'],
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