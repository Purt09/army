<?php

/* @var $this yii\web\View */

/**
 * @var $abonents \core\vendor\pages\models\Page
 * @var $info \core\vendor\pages\models\Page
 */

$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;

?>
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
