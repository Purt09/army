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
    'controllerMap' => [
        'elfinder' => [
            'class' => 'frontend\modules\fileManager\Controller',
            'access' => ['read' => '*', 'write' => 'officer'],
            'plugin' => [
                [
                    'class'=>'frontend\modules\fileManager\plugin\Sluggable',
                    'lowercase' => true,
                    'replacement' => '-'
                ]
            ],
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
            'managerOptions' => [
                'handlers' => [
//                    'open' => 'function(event, elfinderInstance) {
//                                    console.log(elfinderInstance);
//                                    $.ajax({
//                                      url: \'http://5f.vka/api/files/open\',
//                                      data: event.data,
//                                      success: function(data){
//                                        console.log(\'open\');
//                                        console.log(data);
//                                      },
//                                      error: function(data){
//                                      }
//                                    });
//                                }',
//                    'rename' => 'function(event, elfinderInstance) {
//                                    console.log(elfinderInstance);
//                                    $.ajax({
//                                      url: \'http://5f.vka/api/files/rename\',
//                                      data: event.data,
//                                      success: function(data){
//                                        console.log(\'rename\');
//                                        console.log(data);
//                                      },
//                                      error: function(data){
//                                      }
//                                    });
//                                }',
//                    'remove' => 'function(event, elfinderInstance) {
//                                    console.log(elfinderInstance);
//                                    $.ajax({
//                                      url: \'http://5f.vka/api/files/remove\',
//                                      data: event.data,
//                                      success: function(data){
//                                        console.log(\'remove\');
//                                        console.log(data);
//                                      },
//                                      error: function(data){
//                                      }
//                                    });
//                                }',
//                    'download' => 'function(event, elfinderInstance) {
//                                    console.log(elfinderInstance);
//                                    $.ajax({
//                                      url: \'http://5f.vka/api/files/download\',
//                                      data: event.data,
//                                      success: function(data){
//                                        console.log(\'download\');
//                                        console.log(data);
//                                      },
//                                      error: function(data){
//                                      }
//                                    });
//                                }',
//                    'upload' => 'function(event, elfinderInstance) {
//                                    console.log(elfinderInstance);
//                                    $.ajax({
//                                      url: \'http://5f.vka/api/files/upload\',
//                                      data: event.data,
//                                      success: function(data){
//                                        console.log(\'upload\');
//                                        console.log(data);
//                                      },
//                                      error: function(data){
//                                      }
//                                    });
//                                }',
//                    'add' => 'function(event, elfinderInstance) {
//                                    console.log(elfinderInstance);
//                                    $.ajax({
//                                      url: \'http://5f.vka/api/files/add\',
//                                      data: event.data,
//                                      success: function(data){
//                                        console.log(\'add\');
//                                        console.log(data);
//                                      },
//                                      error: function(data){
//                                      }
//                                    });
//                                }',
                ],
            ],
        ]
    ],
    'params' => $params,
];
