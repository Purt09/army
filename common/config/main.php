<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ],
    ],
    'language' => 'ru-RU',
    'bootstrap' => ['media'],
    'modules' => [
        'media' => [
            'class' => pantera\media\Module::className(),
            'permissions' => ['admin'],
        ],
        'pages' => 'core\vendor\pages\Module',
        'controllerMap' => [
            'manager' => [
                'class' => 'core\vendor\pages\controllers\ManagerController',
                'as access' => [
                    'class' => \yii\filters\AccessControl::className(),
                    'rules' => [
                        [
                            'allow' => true,
                            'roles' => ['admin'],
                        ],
                    ],
                ],
            ],
        ],
        'pathToImages' => '@webroot/images',
        'urlToImages' => '@web/images',
        'pathToFiles' => '@webroot/files',
        'urlToFiles' => '@web/files',
        'uploadImage' => false,
        'uploadFile' => false,
        'addImage' => false,
        'addFile' => false,
    ],
];
