<?php

/* @var $this yii\web\View */

/**
 * @var $abonents \bupy7\pages\models\Page
 * @var $info \bupy7\pages\models\Page
 */

use yii\helpers\Html;
use llagerlof\moodlerest\MoodleRest;

$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;

$parameters = ['criteria' =>
    ['0' => [
        'key' => 'id',
        'value' => 'string'
            ]
    ]
];
?>

<div class="col-sm-6">
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">Контакты</h3>

        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $info->content ?>
        </div>
        <!-- /.box-body -->
    </div>
</div>
<div class="col-sm-6">
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">Список терминалов</h3>


        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $abonents->content ?>
        </div>
        <!-- /.box-body -->
    </div>
</div>
