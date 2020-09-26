<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => [
        'log',
        'common\bootstrap\SetUp'
    ],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
            ],
            'baseUrl' => '',
            'csrfParam' => '_csrf-frontend',
            'cookieValidationKey' => $params['cookieValidationKey'],
        ],
        'user' => [
            'identityClass' => 'core\entities\User\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity', 'httpOnly' => true, 'domain' => $params['cookieDomain']],
        ],
        'session' => [
            'name' => '_session',
            'cookieParams' => [
                'domain' => $params['cookieDomain'],
                'httpOnly' => true,
            ],
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'backendUrlManager' => require __DIR__ . '/../../backend/config/urlManager.php',
        'frontendUrlManager' => require __DIR__ . '/urlManager.php',
        'urlManager' => function () {
            return Yii::$app->get('frontendUrlManager');
        },
    ],
    'modules' => [
        'lk' => [
            'class' => 'frontend\modules\lk\Module',
        ],
        'courses' => [
            'class' => 'frontend\modules\courses\Module',
        ],
        'department' => [
            'class' => 'frontend\modules\department\Module',
        ],
        'education' => [
            'class' => 'frontend\modules\education\Module',
        ],
        'documents' => [
            'class' => 'frontend\modules\documents\Module',
        ],
        'fileManager' => [
            'class' => 'frontend\modules\fileManager\SimpleFilemanagerModule',
        ],
    ],
    'controllerMap' => [
        'elfinder' => [
            'class' => 'mihaildev\elfinder\Controller',
            'access' => ['read' => '@', 'write' => 'officer'],
            'roots' => [
                [
                    'path' => 'files/fakultet',
                    'name' => 'Факультет' //перевод Yii::t($category, $message)
                ],
                [
                    'path'   => 'files/podrazdelenia',
                    'name'   => 'Подразделения', // Yii::t($category, $message)
                ],
                [
                    'path'   => 'files/prikaz',
                    'name'   => 'Приказания', // Yii::t($category, $message)
                ]
            ],
        ]
    ],
    'params' => $params,
];
