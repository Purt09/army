<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model core\entities\Common\FileLog */

$this->title = 'Update File Log: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'История действий с файлами', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="file-log-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
