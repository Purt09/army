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
        'media',
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
        'formatter' => [
            'dateFormat' => 'dd.MM.yyyy',
            'decimalSeparator' => ',',
            'thousandSeparator' => ' ',
            'currencyCode' => 'RUB',
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
                    'class' => 'yii\log\DbTarget',
                    'levels' => ['error', 'warning'],
                    'except' => [
                        'yii\web\HttpException:404',
                        'yii\web\HttpException:403',
                    ],
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
        'media' => [
            'class' => pantera\media\Module::className(),
            'permissions' => ['admin'],
            'mediaUrlAlias' => '@web/upload/',
            'mediaFileAlias' => '@webroot/upload/'
        ],
        'gridview' => [
            'class' => '\kartik\grid\Module'
        ],
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
        'api' => [
            'class' => 'frontend\modules\api\Module',
        ],
    ],
    'params' => $params,
];
