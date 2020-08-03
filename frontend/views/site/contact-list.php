<?php

/* @var $this yii\web\View */

/**
 * @var $abonents \bupy7\pages\models\Page
 * @var $info \bupy7\pages\models\Page
 */


$this->title = 'Список абонентов';
$this->params['breadcrumbs'][] = $this->title;

?>
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