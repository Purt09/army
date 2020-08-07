<?php

namespace frontend\modules\documents;

use DeLuxis\Yii2SimpleFilemanager\SimpleFilemanagerModule;

class Module extends SimpleFilemanagerModule
{
    public function init()
    {
        \Yii::$app->name = 'Образовательная деятельность';
        parent::init();
        $this->layout = 'main';
        \Yii::configure($this, require __DIR__ . '/config/main.php');

        $this->modules = [
            'filemanager' => [
                'class' => 'frontend\modules\documents\components\SimpleFilemanagerModule',
                'as access' => [
                    'class' => '\yii\filters\AccessControl',
                    'rules' => [
                        [
                            'allow' => true,
                            'roles' => ['@'],
                        ],
                    ]
                ]
            ]
        ];

    }
}